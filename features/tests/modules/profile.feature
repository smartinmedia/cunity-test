@module @profile @js
Feature: My profile
  In order edit my profile
  As a usual user
  I need to be loggedin

  Scenario: See profile edit button
    Given I am oliver
    Then I should see "Edit profile"

  Scenario: See profile edit form
    Given I am oliver
    When I follow "Edit profile"
    Then I should see "General"
    And I should see "Change password"
    And I should see "Delete Account"

  @javascript
  Scenario: Update profile
    Given I am oliver
    When I follow "Edit profile"
    And I press "Save"
    And I wait
    Then I should see "Your changes were saved successfully!"

  @javascript
  Scenario: See password change form
    Given I am oliver
    When I follow "Edit profile"
    And I follow "Change password"
    Then I should see "Current Password"

  @javascript
  Scenario: Update password with wrong current password
    Given I am oliver
    When I follow "Edit profile"
    And I follow "Change password"
    And I fill in "old-password" with "987654321"
    And I fill in "new-password" with "123456"
    And I fill in "new-password-rep" with "123456"
    And I press "updatepassword"
    And I wait
    Then I should see "The current password is wrong"

  @javascript
  Scenario: Update password with wrong different new passwords
    Given I am oliver
    When I follow "Edit profile"
    And I follow "Change password"
    And I fill in "old-password" with password
    And I fill in "new-password" with "123456"
    And I fill in "new-password-rep" with "654321"
    And I press "updatepassword"
    And I wait
    Then I should see "The new passwords do not match"

  @javascript
  Scenario: Update password
    Given I am oliver
    When I follow "Edit profile"
    And I follow "Change password"
    And I fill in "old-password" with password
    And I fill in "new-password" with password
    And I fill in "new-password-rep" with password
    And I press "updatepassword"
    And I wait
    Then I should see "Password changed successfully!"

  @javascript
  Scenario: See Delete Account form
    Given I am oliver
    When I follow "Edit profile"
    And I follow "Delete Account"
    Then I should see "Yes, I am sure. Delete my account"

  @javascript
  Scenario: See Privacy settings
    Given I am oliver
    When I follow "Edit profile"
    And I follow "profile-menu-edit-privacy"
    Then I should see "Who is allowed to search you?"
    And I should see "Who is allowed to see your profile-pins?"
    And I should see "Who is allowed to send you messages?"
    And I should see "Who is allowed to see your Newsfeed-Posts?"

  @javascript
  Scenario: Update Privacy settings
    Given I am oliver
    When I follow "Edit profile"
    And I follow "profile-menu-edit-privacy"
    And I press "saveprivacy"
    And I wait
    Then I should see "Privacy settings changed successfully!"

  @javascript
  Scenario: See profile image form
    Given I am oliver
    When I follow "Edit profile"
    And I follow "profile-menu-edit-images"
    Then I should see "Edit My Profile Image"
    And I should see "Profile Image"
    And I should see "Title Image"

  @javascript
  Scenario: See title image form
    Given I am oliver
    When I follow "Edit profile"
    And I follow "profile-menu-edit-images"
    And I follow "Title Image"
    Then I should see "Edit My Title Image"
    And I should see "Profile Image"
    And I should see "Title Image"

  @javascript
  Scenario: See Notification settings
    Given I am oliver
    When I follow "Edit profile"
    And I follow "profile-menu-edit-notifications"
    Then I should see "Notifications-Settings"

  @javascript
  Scenario: Update Privacy settings
    Given I am oliver
    When I follow "Edit profile"
    And I follow "profile-menu-edit-notifications"
    And I press "savenotification"
    And I wait
    Then I should see "Notification settings changed successfully!"
