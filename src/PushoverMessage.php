<?php

namespace Natpnk\Pushover;

class PushoverMessage extends \NotificationChannels\Pushover\PushoverMessage {
    
    /**
     * The application token
     *     
     */
    public ?string $token = null;   

    /**
     * Set the application token
     *
     * @param  string  $title
     * @return $this
     */
    public function token(string $token): static {
        
        $this->token = $token;

        return $this;
    }

    /**
     * Array representation of Pushover Message.
     *
     * @return array
     */
    public function toArray(): array {
        
        return [
            'message' => $this->content,
            'title' => $this->title,
            'token' => $this->token ?? config('services.pushover.token'),
            'timestamp' => $this->timestamp,
            'priority' => $this->priority,
            'url' => $this->url,
            'url_title' => $this->urlTitle,
            'sound' => $this->sound,
            'image' => $this->image,
            'retry' => $this->retry,
            'expire' => $this->expire,
            'html' => $this->format === static::FORMAT_HTML,
            'monospace' => $this->format === static::FORMAT_MONOSPACE,
        ];
    }
}