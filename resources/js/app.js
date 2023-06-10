import './bootstrap';

new Vue({
    el: '#app',
    data: {
      newUser: {
        name: '',
        email: '',
        selectedRoles: []
      },
      users: [],
      roles: [
        { label: 'Administrador', value: 'admin' },
        { label: 'Cliente', value: 'cliente' },
        { label: 'Gerente', value: 'gerente' },
        { label: 'Supervisor', value: 'supervisor' },
        { label: 'Preventa', value: 'preventa' },
        { label: 'Repartidor', value: 'repartidor' }
      ]
    },
    methods: {
      addUser() {
        this.users.push({
          name: this.newUser.name,
          email: this.newUser.email,
          selectedRoles: [...this.newUser.selectedRoles]
        });
  
        this.newUser.name = '';
        this.newUser.email = '';
        this.newUser.selectedRoles = [];
      },
      removeUser(index) {
        this.users.splice(index, 1);
      }
    }
  });

  function loginWithFacebook() {
    FB.login(function(response) {
      if (response.authResponse) {
        // El usuario ha iniciado sesión y ha autorizado la aplicación
        getUserData();
      } else {
        // El usuario ha cancelado el inicio de sesión o no ha autorizado la aplicación
        console.log('Inicio de sesión con Facebook cancelado');
      }
    }, {scope: 'email'}); // Solicita permiso para acceder al correo electrónico del usuario
  }
  
  function getUserData() {
    FB.api('/me', {fields: 'name,email'}, function(response) {
      // Aquí puedes utilizar los datos del usuario obtenidos de Facebook
      console.log('Datos del usuario:', response);
      // Aquí puedes realizar la autenticación en tu aplicación utilizando los datos del usuario
    });
  }
  
  