<?php

namespace App\Model;

// Enum = A set of values set in one place.
enum StarshipStatusEnum: string
{
  case WAITING = 'waiting';
  case IN_PROGRESS = 'in progress';
  case COMPLETED = 'completed';
}