@module @friendprofile @nojs
Feature: Look at friend
  In order to see a friends profile
  As a cunity user
  I need to be able see him

  @javascript
  Scenario: See profile
    Given I am oliver
    When I follow "profile-menu-friends"
    Then I should see "asd"
    And I should see "aaa"

  Scenario: See number of friends
