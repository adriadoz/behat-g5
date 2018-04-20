Feature: Api Random Color
  In order to get a random color
  As a customer
  I need to be able to request and get a random color from the api

  Scenario: Get a random color from the api
    Given I do a "GET" request to "/?valor=color"
    Then The response code should be "200"
    And The response should be a random color from InMemoryColorRepository

  Scenario: Fail to get a random color from the api
    Given I do a "GET" request to "/?valor=colour"
    Then The response code should be "404"