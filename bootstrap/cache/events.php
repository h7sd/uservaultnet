<?php return array (
  'Illuminate\\Foundation\\Support\\Providers\\EventServiceProvider' => 
  array (
    'App\\Events\\Admin\\User\\UserBannedEvent' => 
    array (
      0 => 'App\\Listeners\\Admin\\User\\HandleUserBan@handle',
    ),
    'App\\Events\\User\\Timeline\\PostCreatedEvent' => 
    array (
      0 => 'App\\Listeners\\User\\Timeline\\HandlePostCreation@handle',
    ),
    'App\\Events\\User\\Story\\StoryCreatedEvent' => 
    array (
      0 => 'App\\Listeners\\User\\Story\\HandleStoryCreation@handle',
    ),
    'App\\Events\\User\\Auth\\UserLoggedInEvent' => 
    array (
      0 => 'App\\Listeners\\User\\Auth\\HandleUserLogin@handle',
    ),
    'App\\Events\\User\\Auth\\UserRegisteredEvent' => 
    array (
      0 => 'App\\Listeners\\User\\Auth\\HandleUserRegistration@handle',
    ),
    'App\\Events\\Media\\MediaDeletedEvent' => 
    array (
      0 => 'App\\Listeners\\Media\\HandleMediaDeletion@handle',
    ),
    'App\\Events\\Media\\MediaCreatedEvent' => 
    array (
      0 => 'App\\Listeners\\Media\\HandleMediaCreation@handle',
    ),
  ),
);