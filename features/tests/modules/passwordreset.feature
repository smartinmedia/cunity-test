@module @passwordreset @nojs
Feature: Reset password
  In order to reset my password
  As a registered user
  I need to be able to reset it

  Scenario: See password reset link
    Given I am on "/"
    Then I should see "I forgot my password"

  Scenario: See password reset form
    Given I am on "/"
    When I follow "I forgot my password"
    Then I should see "If you forgot or lost your password, enter your email adress your have used for registration and we will send you a link to reset your password"
