@module @friends @js
Feature: Friends
  In order to interact with friends
  As a usual user
  I need to have friends

  @javascript
  Scenario: See friends
    Given I am oliver
    When I am on "/friends"
    Then I should see "asd"

  @javascript
  Scenario: View friend's profile
    Given I am oliver
    When I am on "/friends"
    And I follow "asd"
    Then I should see "asd"
    And I should see "( asd )"
