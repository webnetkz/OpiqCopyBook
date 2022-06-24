# -*- coding: utf-8 -*-
# coding:utf8
from selenium import webdriver
from selenium.webdriver.common.by import By
from selenium.webdriver import ActionChains
from selenium.webdriver.common.keys import Keys
import random
import time
from bs4 import BeautifulSoup
from lxml import etree
import requests


def start_app():

  #url_from = input("URL From\n")
  #url_to = input("URL To\n")

  url_to= r"https://opiqcms.com/Authoring/Kit/Edit/fe34c7d0-d077-4771-80bf-7951307cc9b6"
  url_from = r"https://opiqcms.com/Authoring/Kit/Edit/8921b031-9fe8-48bd-a579-c1b7713da8b1"

  EXE_PATH = r"C:\Users\User-B.I.G._03\Desktop\second_brain\Computer Science\Языки программирования\Python\Moduls\Selenium\driver.exe" # Путь до драйвера
  options = webdriver.ChromeOptions() # Создание объекта настроек
  options.add_argument('headless') # Активация скрытого режима

  driver = webdriver.Chrome(executable_path=EXE_PATH)#, chrome_options=options)
  driver.get(url_from)

  #Авторизация
  time.sleep(3)
  driver.find_element_by_css_selector('input[type="email"]').send_keys("dbqqbq@gmail.com")
  driver.find_element_by_css_selector('input[type="password"]').send_keys("ghbdtnz11!!QQ")
  driver.find_element_by_css_selector('button[type="submit"]').click()

  #Переход к стилям
  time.sleep(3)
  id_book = driver.current_url.replace("https://opiqcms.com/Authoring/Kit/Edit/", "")
  url_styles = "https://opiqcms.com/Authoring/Kit/Design/"+id_book
  driver.get(url_styles)

  #Коппирование и обработка стилей
  time.sleep(3)
  soup = BeautifulSoup(driver.page_source, 'html.parser')

  html = etree.HTML(str(soup)) 
  
  # Префикс стилей (сокращенный префикс)
  prefixBookFrom = soup.find_all("span", class_="cm-qualifier")
  prefixBookFrom = str(prefixBookFrom[0]).replace('<span class="cm-qualifier">.kit-', "")
  prefixBookFrom = prefixBookFrom.replace("-i1</span>", "")

  # Все копируемые стили и их описание
  stylesBookFrom = html.xpath("/html/body/div[2]/kit-design-component/div/div/div/div[1]/div/div/div[6]/div[1]/div/div/div/div[5]/pre//text()")
  descriptionBookFrom = html.xpath("/html/body/div[2]/kit-design-component/div/div/div/div[3]/div/div[2]/table/tbody")

  #############################################################

  # Завершена подготовка всех копируемых стилей

  #############################################################

  # Короткий префикс конечного учебника
  prefixBookTo = soup.find_all("span", class_="cm-qualifier")
  prefixBookTo = str(prefixBookTo[0]).replace('<span class="cm-qualifier">.kit-', "")
  prefixBookTo = prefixBookTo.replace("-i1</span>", "")

  # Замена короткого префикса во всех копируемых стилях
  for i in stylesBookFrom:
    i = i.replace(prefixBookFrom, prefixBookTo)


  time.sleep(3)
  xxx = driver.find_element_by_css_selector(".CodeMirror-code")
  driver.find_element_by_name('body').send_keys(Keys.CONTROL, 'a')

  while True:
    True


if __name__ == '__main__':
  start_app()
  #while True:
    #time.sleep(0.1)
    #print("-"*random.randint(1, 50))