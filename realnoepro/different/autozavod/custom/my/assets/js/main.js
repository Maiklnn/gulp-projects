let els = document.querySelector('#gallery');


Vue.createApp({

    data: () => ({
        show_popup: false,
        items: [],
        number: 0,
        img_large: ''
    }),
    methods: {
        handler_show(i) {
            this.show_popup = true
            this.number = i + 1
            this.img_large = this.items[i][1]
        },
        remove_show() {
            this.show_popup = false
        },
        prev() {
            this.img_large = this.items[this.number - 2][1]
            this.number--
        },
        next() {
            this.img_large = this.items[this.number][1]
            this.number++
        }
    },
    computed: {
        evenItems() {
            let gal = document.querySelector('.gallery')
            let arr = gal.querySelectorAll('a')
            gal.remove()
            arr.forEach(item => {
                let img = item.querySelector('img')
                let template = [img.src, item.href];
                this.items.push(template)
            })
            return this.items
        }
    }
}).mount(els)


// let gallery = document.querySelector();




