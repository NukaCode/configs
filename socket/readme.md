# Set up

## Requirements

### Node

`npm install -S express http ioredis socket.io`

### Redis

`brew install redis`

> For linux follow [this guide](https://gist.github.com/nghuuphuoc/7801123) or look for one fitting your
> distro

### Vue

`bower install -S vue vue-resource socket.io-client`

## socket.js

Take the `socket.js` file in this directory and put it in the root of your project.

> **Note** This will start the server on port 3000.

# Starting it all

You may wish to do this in a screen or use a terminal with multiple tabs.

```

    // Mac
    redis-server
    node socket.js
    
    // Linux
    service redis start
    node socket.js
```

# Sending events

Use [Laravel's event system](http://laravel.com/docs/master/events#broadcasting-events).  It takes care of all that for you.

# Vue

```javascript
    
    <script>
      new Vue({
        el: "#vue",
  
        data: {
          ...
        },
  
        ready: function () {
          self = this;
  
          var socket = io('{!! config('app.url') !!}:3000');
  
          socket.on('CHANNEL:App\\Events\\CLASS', function (message) {
            console.log(message);
          });  
        }
      })
    </script>
```

Obviously change `CHANNEL` to the channel you detailed in the `broadcastOn()` method and `CLASS` to the name of your Event.