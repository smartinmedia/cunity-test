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

  Scenario: View fotos in a gallery
    When I am oliver
    And I follow "Gallery"
    And I follow "Posted Images"
    Then I should see "Posted Images"
