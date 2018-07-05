var msg;
if (window.jQuery) {
    msg = 'Версия jQuery: ' + jQuery.fn.jquery;
} else {
    msg = 'jQuery не установлен';
}
console.log(msg);
