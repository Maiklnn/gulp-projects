import {Telegraf} from "telegraf";
import config from 'config'
import {message} from "telegraf/filters";
import {ogg} from './ogg.js'

/*
 �������� �����
    - ������� � ��������
    - � ������ �������� ���� BotFather
    - � ���� �������� /newbot
    - ����������� ��� (GPT bot)
    - ���������� id (GPTid_bot)
    - ���� �� ������� �� �������� ����� (6175520602:AAH7i-udCTdd5G7vNnl2dY1w32Hxq9imS5U)
    ������ �� cmd npm run dev
    31
*/


const bot = new Telegraf(config.get('TELEGRAM_TOKEN')) // ������ ����

// ��������� ��������� ��������� (message('text') ��������� ��������� message('voice') ��������� ��������� )
bot.on(message('voice'), async (ctx) => {
	try {
		const link = await ctx.telegram.getFileLink(ctx.message.voice.file_id)
		const userId = String(ctx.message.from.id)
		const oggPath = await ogg.create(link.href, userId) // ��������� ���� �� ������
		await ctx.reply(JSON.stringify(link, null, 2))
	} catch (e) {
		console.log('Error while voice message', e.message)
	}
})

// ������� ��� ����
bot.command('start', async (ctx) => {
	await ctx.reply(JSON.stringify(ctx.message, null, 2)) // ��������
})

bot.launch() // ��������� ����


process.once('SIGNT', () => bot.stop('SIGNT')) // ����� ���������� ������ node.js  ������������� ����
process.once('TERM', () => bot.stop('TERM')) // ����� ���������� ������ node.js  ������������� ����
