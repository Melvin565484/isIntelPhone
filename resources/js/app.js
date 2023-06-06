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
  