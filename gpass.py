#by xinhuaren

import string
import secrets
import os
from time import sleep

class ecx:

	def __init__(self):
		os.system('clear')
		print("""
	[PASSWORD GENERATOR]
		""")
		print('Ketik start untuk membuat passwordmu')
		a=input('> ')
		sleep(2)
		print(' ')
		alphabet = string.ascii_letters + string.digits
		password = ''.join(secrets.choice(alphabet) for i in range(15))
		print('Password Kamu : ',password)

try:

	khazul()
	while True:
		print(' ')
		b = input('Mau buat lagi?(y/n)')
		if b.lower() == 'y':
			khazul()
		elif b.lower() == 'n':
			exit ('Sempai jumpa lagi ...')

except KeyboardInterrupt:
	print('Goodbye...')
