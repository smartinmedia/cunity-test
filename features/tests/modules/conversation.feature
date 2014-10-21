@module @conversation @js
Feature: Conversation with others
  In order communicate with others
  As a cunity user
  I need to be able to write messages

  Scenario: See Conversations
    Given I am oliver
    When I am on "/messages"
    Then I should see "Conversations"
    And I should see "Start Conversation"

  @javascript
  Scenario: Start a conversation
    Given I am oliver
    When I am on "/messages"
      And I click id "startConversation"
    Then I should see "Send a message"
