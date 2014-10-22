@module @gallery @js
Feature: Gallery
  In order view fotos in the gallery
  As a cunity user
  I need to upload fotos into a gallery

  Scenario: View galleries
    When I am oliver
    And I follow "Gallery"
    Then I should see "New Album"
    And I should see "Posted Images"

  @javascript
  Scenario: View fotos in a gallery
    When I am oliver
    And I am on "/gallery"
    And I follow "testalbum"
    Then I should see "testalbum"
