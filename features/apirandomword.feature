Feature: Api Random Word
  In order to get a random Word
  As a customer
  I need to be able to request and get a random word from the api

  Scenario: Get a random word from the api
    Given I do a "GET" request to "word.php"
    Then The response code should be "200"
    And The response should be a random word from InMemoryCoolWordRepository

  Scenario: Fail to get a random word from the api
    Given I do a "GET" request to "wourd.php"
    Then The response code should be "404"