# Generated by Selenium IDE
import pytest
import time
import json
from selenium import webdriver
from selenium.webdriver.common.by import By
from selenium.webdriver.common.action_chains import ActionChains
from selenium.webdriver.support import expected_conditions
from selenium.webdriver.support.wait import WebDriverWait
from selenium.webdriver.common.keys import Keys
from selenium.webdriver.common.desired_capabilities import DesiredCapabilities

class TestTestadminaddsupplier():
  def setup_method(self, method):
    self.driver = webdriver.Chrome()
    self.vars = {}
  
  def teardown_method(self, method):
    self.driver.quit()
  
  def test_testadminaddsupplier(self):
    self.driver.get("http://127.0.0.1:8000/")
    self.driver.set_window_size(1518, 804)
    self.driver.find_element(By.CSS_SELECTOR, "li:nth-child(7) span").click()
    self.driver.find_element(By.LINK_TEXT, "New Supplier").click()
    self.driver.find_element(By.ID, "nama_supplier").click()
    self.driver.find_element(By.ID, "nama_supplier").send_keys("Supplier 1")
    self.driver.find_element(By.ID, "kontak").click()
    self.driver.find_element(By.ID, "kontak").send_keys("082223127698")
    self.driver.find_element(By.ID, "alamat").click()
    self.driver.find_element(By.ID, "alamat").send_keys("JL. 123 ABC Test")
    self.driver.find_element(By.CSS_SELECTOR, ".btn-success").click()
    assert self.driver.find_element(By.CSS_SELECTOR, ".alert").text == "Supplier created successfully."
  
