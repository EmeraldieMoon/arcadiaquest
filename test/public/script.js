const socket = io();

document.getElementById('sendMessage').addEventListener('click', () => {
  const message = document.getElementById('messageInput').value;
  socket.emit('chatMessage', message);
  document.getElementById('messageInput').value = '';
});

socket.on('chatMessage', (msg) => {
  const messageElement = document.createElement('div');
  messageElement.textContent = msg;
  document.getElementById('messages').appendChild(messageElement);
});
