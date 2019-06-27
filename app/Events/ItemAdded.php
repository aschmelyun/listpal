<?php

namespace App\Events;

use Illuminate\Broadcasting\Channel;
use Illuminate\Queue\SerializesModels;
use Illuminate\Broadcasting\PrivateChannel;
use Illuminate\Broadcasting\PresenceChannel;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;
use App\Checklist;

class ItemAdded implements ShouldBroadcast
{
    use Dispatchable, InteractsWithSockets, SerializesModels;

    public $checklist;

    /**
     * Create a new event instance.
     *
     * @return void
     */
    public function __construct(Checklist $checklist)
    {
        $this->checklist = $checklist;
        $this->checklist->load(['items' => function($query) {
            $query->orderBy('is_complete', 'ASC');
            $query->orderBy('created_at', 'DESC');
        }]);
    }

    /**
     * Get the channels the event should broadcast on.
     *
     * @return \Illuminate\Broadcasting\Channel|array
     */
    public function broadcastOn()
    {
        return new Channel('checklist-' . $this->checklist->hash);
    }

    public function broadcastAs()
    {
        return 'item.added';
    }
}
