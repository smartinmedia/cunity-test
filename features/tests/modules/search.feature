@module @search @js
Feature: Search for users
  In order to search other members
  As a cunity user
  I need to be able to find them

  @javascript
  Scenario: See result for nonsense data
    When I am oliver
    And I fill in "q" with "äöü"
    And I wait
    Then I should see "No results for your query"

  @javascript
  Scenario: See preview of search results for friends
    When I am oliver
    And I fill in "q" with "asd"
    Then I should see "asd"
