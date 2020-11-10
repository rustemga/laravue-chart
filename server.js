let http = require('http').Server();//запускает сервер
let io = require('socket.io')(http);//socket.io реализует протокол web socket для связи сервера с клиентом в браузере
let Redis = require('ioredis');//чтобы получить доступ к redis серверу используем библиотеку ioredis

let redis = new Redis();//создаем экземпляр класса redis
redis.subscribe('socket-action-chanel');//подписываемся на канал указанный в event классе NewEvent
redis.on('message', function(channel, message){
    console.log("Сообщение" + message);
    console.log("Канал" + channel);
    message = JSON.parse(message)
    io.emit(channel + ':' + message.event, message.data);
});

http.listen(3000, function (){
   console.log('Listening on Port: 3000');
});
