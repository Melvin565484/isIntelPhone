<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Gestión de usuarios</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
  <script src="https://cdn.jsdelivr.net/npm/vue@2.6.14/dist/vue.js"></script>
</head>
<body>
  <div id="app" class="container">
    <h1>Gestión de usuarios</h1>
    <form @submit.prevent="addUser">
      <div class="form-group">
        <label for="name">Nombre:</label>
        <input type="text" id="name" class="form-control" v-model="newUser.name">
      </div>
      <div class="form-group">
        <label for="email">Email:</label>
        <input type="email" id="email" class="form-control" v-model="newUser.email">
      </div>
      <div class="form-group">
        <label>Rol:</label>
        <div class="form-check" v-for="(role, index) in roles" :key="index">
          <input type="checkbox" class="form-check-input" :id="role.value" v-model="newUser.selectedRoles" :value="role.value">
          <label class="form-check-label" :for="role.value"> Administrador </label>
        </div>
        <div class="form-check" v-for="(role, index) in roles" :key="index">
          <input type="checkbox" class="form-check-input" :id="role.value" v-model="newUser.selectedRoles" :value="role.value">
          <label class="form-check-label" :for="role.value"> Gerente </label>
        </div> 
        <div class="form-check" v-for="(role, index) in roles" :key="index">
          <input type="checkbox" class="form-check-input" :id="role.value" v-model="newUser.selectedRoles" :value="role.value">
          <label class="form-check-label" :for="role.value"> Supervisor </label>
        </div>
        <div class="form-check" v-for="(role, index) in roles" :key="index">
          <input type="checkbox" class="form-check-input" :id="role.value" v-model="newUser.selectedRoles" :value="role.value">
          <label class="form-check-label" :for="role.value"> Cliente </label>
        </div>
        <div class="form-check" v-for="(role, index) in roles" :key="index">
          <input type="checkbox" class="form-check-input" :id="role.value" v-model="newUser.selectedRoles" :value="role.value">
          <label class="form-check-label" :for="role.value"> Preventa </label>
        </div>
        <div class="form-check" v-for="(role, index) in roles" :key="index">
          <input type="checkbox" class="form-check-input" :id="role.value" v-model="newUser.selectedRoles" :value="role.value">
          <label class="form-check-label" :for="role.value"> Repartidor </label>
        </div>
      </div>
      <button type="submit" class="btn btn-primary">Agregar usuario</button>
    </form>

    <h2>Usuarios</h2>
    <ul class="list-group">
      <li v-for="(user, index) in users" :key="index" class="list-group-item">
        {{ user.name }} - {{ user.email }} - {{ user.selectedRoles.join(', ') }}
        <button @click="removeUser(index)" class="btn btn-danger">Eliminar</button>
      </li>
    </ul>
  </div>

  <script src="app.js"></script>
</body>
</html>
