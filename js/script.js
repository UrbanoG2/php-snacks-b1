const App = new Vue(
    {
      el: '#app',
      data: {

        //array vuoto
        cars: []
      },
      created() {

        //chiamata axios sul link del mio controller
        axios.get('http://localhost/php-snacks-b1/server/controller-api.php').then((result) => {
          this.cars = result.data;
          console.log(this.cars);
        }).catch((error) => { console.log(error); });
      }
    }
  );