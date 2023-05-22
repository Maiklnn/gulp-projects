import {Telegraf} from "telegraf";
import config from 'config'
import {message} from "telegraf/filters";
import {ogg} from './ogg.js'

/*
 Получаем токен
    - заходим в телеграм
    - в поиске выбираем бота BotFather
    - в меню выбираем /newbot
    - прописываем имя (GPT bot)
    - прписываем id (GPTid_bot)
    - если всё успешно то копируем токен (6175520602:AAH7i-udCTdd5G7vNnl2dY1w32Hxq9imS5U)
    запуск из cmd npm run dev
    31
*/


const bot = new Telegraf(config.get('TELEGRAM_TOKEN')) // создаём бота

// обработка входящего сообщения (message('text') текстовое сообщение message('voice') голосовое сообщение )
bot.on(message('voice'), async (ctx) => {
	try {
		const link = await ctx.telegram.getFileLink(ctx.message.voice.file_id)
		const userId = String(ctx.message.from.id)
		const oggPath = await ogg.create(link.href, userId) // загружаем файл на сервер
		await ctx.reply(JSON.stringify(link, null, 2))
	} catch (e) {
		console.log('Error while voice message', e.message)
	}
})

// команда для бота
bot.command('start', async (ctx) => {
	await ctx.reply(JSON.stringify(ctx.message, null, 2)) // ответить
})

bot.launch() // запускаем бота


process.once('SIGNT', () => bot.stop('SIGNT')) // после завершения работы node.js  останавливаем бота
process.once('TERM', () => bot.stop('TERM')) // после завершения работы node.js  останавливаем бота
