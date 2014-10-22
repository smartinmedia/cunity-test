@module @profile @nojs
Feature: My profile
  In order edit my profile
  As a usual user
  I need to be loggedin

  Scenario: See profile edit button
    Given I am oliver
    Then I should see "Edit profile"
