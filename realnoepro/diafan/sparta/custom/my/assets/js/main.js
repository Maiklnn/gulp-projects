

class Webnn {
	constructor() {
		this.dynamicAdapt();
		this.events();
	}

	events() {
		// клик
		document.addEventListener('click', e => {
			this.element = e
			this.target = e.target
			this.tab_link = this.target.closest('*[data-tab_link]')
			if(this.tab_link) this.tabs()
		});
	}

	tabs() {
		this.element.preventDefault()
		let container = this.target.closest('.tab');
		let tab_id = this.tab_link.dataset.tab_link;

		// обработка ссылок
		let tab_links = container.querySelectorAll('*[data-tab_link]')
		tab_links.forEach(item => {
			item.classList.remove('tab__link--active')
			if(item.dataset.tab_link === tab_id) item.classList.add('tab__link--active')
		})

		// обработка контента
		let tab_content = container.querySelectorAll('*[data-tab_content]')
		tab_content.forEach(item => {
			item.classList.remove('tab__content-item--active')
			if(item.dataset.tab_content === tab_id) item.classList.add('tab__content-item--active')
		})

	}

	dynamicAdapt() {
		/*
			указываем атрибут data-da в нём указываем 3 параметра
			1 куда (в какой блок)
			2 какой (какой посчёту в блоке для удобства можно прописать first, last)
			3 когда ( на каком разрешении)
			data-da="main-tab__nav, last, 991"
		*/
		let originalPositions = [];
		let daElements = document.querySelectorAll('[data-da]');
		let daElementsArray = [];
		let daMatchMedia = [];
		//Заполняем массивы
		if (daElements.length > 0) {
			let number = 0;
			for (let index = 0; index < daElements.length; index++) {
				const daElement = daElements[index];
				const daMove = daElement.getAttribute('data-da');
				if (daMove != '') {
					const daArray = daMove.split(',');
					const daPlace = daArray[1] ? daArray[1].trim() : 'last';
					const daBreakpoint = daArray[2] ? daArray[2].trim() : '767';
					const daType = daArray[3] === 'min' ? daArray[3].trim() : 'max';
					const daDestination = document.querySelector('.' + daArray[0].trim())
					if (daArray.length > 0 && daDestination) {
						daElement.setAttribute('data-da-index', number);
						//Заполняем массив первоначальных позиций
						originalPositions[number] = {
							"parent": daElement.parentNode,
							"index": indexInParent(daElement)
						};
						//Заполняем массив элементов
						daElementsArray[number] = {
							"element": daElement,
							"destination": document.querySelector('.' + daArray[0].trim()),
							"place": daPlace,
							"breakpoint": daBreakpoint,
							"type": daType
						}
						number++;
					}
				}
			}
			dynamicAdaptSort(daElementsArray);

			//Создаем события в точке брейкпоинта
			for (let index = 0; index < daElementsArray.length; index++) {
				const el = daElementsArray[index];
				const daBreakpoint = el.breakpoint;
				const daType = el.type;

				daMatchMedia.push(window.matchMedia("(" + daType + "-width: " + daBreakpoint + "px)"));
				daMatchMedia[index].addListener(dynamicAdapt);
			}
		}
		//Основная функция
		function dynamicAdapt(e) {
			for (let index = 0; index < daElementsArray.length; index++) {
				const el = daElementsArray[index];
				const daElement = el.element;
				const daDestination = el.destination;
				const daPlace = el.place;
				const daBreakpoint = el.breakpoint;
				const daClassname = "_dynamic_adapt_" + daBreakpoint;

				if (daMatchMedia[index].matches) {
					//Перебрасываем элементы
					if (!daElement.classList.contains(daClassname)) {
						let actualIndex = indexOfElements(daDestination)[daPlace];
						if (daPlace === 'first') {
							actualIndex = indexOfElements(daDestination)[0];
						} else if (daPlace === 'last') {
							actualIndex = indexOfElements(daDestination)[indexOfElements(daDestination).length];
						}
						daDestination.insertBefore(daElement, daDestination.children[actualIndex]);
						daElement.classList.add(daClassname);
					}
				} else {
					//Возвращаем на место
					if (daElement.classList.contains(daClassname)) {
						dynamicAdaptBack(daElement);
						daElement.classList.remove(daClassname);
					}
				}
			}
			customAdapt();
		}
		//Вызов основной функции
		dynamicAdapt();

		//Функция возврата на место
		function dynamicAdaptBack(el) {
			const daIndex = el.getAttribute('data-da-index');
			const originalPlace = originalPositions[daIndex];
			const parentPlace = originalPlace['parent'];
			const indexPlace = originalPlace['index'];
			const actualIndex = indexOfElements(parentPlace, true)[indexPlace];
			parentPlace.insertBefore(el, parentPlace.children[actualIndex]);
		}
		//Функция получения индекса внутри родителя
		function indexInParent(el) {
			var children = Array.prototype.slice.call(el.parentNode.children);
			return children.indexOf(el);
		}
		//Функция получения массива индексов элементов внутри родителя
		function indexOfElements(parent, back) {
			const children = parent.children;
			const childrenArray = [];
			for (let i = 0; i < children.length; i++) {
				const childrenElement = children[i];
				if (back) {
					childrenArray.push(i);
				} else {
					//Исключая перенесенный элемент
					if (childrenElement.getAttribute('data-da') == null) {
						childrenArray.push(i);
					}
				}
			}
			return childrenArray;
		}
		//Сортировка объекта
		function dynamicAdaptSort(arr) {
			arr.sort(function (a, b) {
				if (a.breakpoint > b.breakpoint) { return -1 } else { return 1 }
			});
			arr.sort(function (a, b) {
				if (a.place > b.place) { return 1 } else { return -1 }
			});
		}
		//Дополнительные сценарии адаптации
		function customAdapt() {
			//const viewport_width = Math.max(document.documentElement.clientWidth, window.innerWidth || 0);
		}
	}


}

new Webnn();
