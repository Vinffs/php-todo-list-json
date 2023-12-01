<!DOCTYPE html>
<html lang="en">

<head>
  <!-- meta tags -->
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />

  <script src="https://unpkg.com/vue@3/dist/vue.global.js"></script>
  <script src="https://unpkg.com/axios@1.1.2/dist/axios.min.js"></script>
  <script src="js/script.js" type="module"></script>

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous" />
  <!-- font-awesome CSS -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"
    integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />
  <!-- link to Font-Family and CSS Files -->
  <link rel="stylesheet" href="" />

  <!-- Document Title -->
  <title>Document</title>
</head>

<body class="bg-info">
  <div id="app">
    <div class="wrapper">
      <div class="container">
        <header class="w-50 text-center mx-auto pt-5">
          <!-- <img class="w-50"  alt="toDoList"> -->
          <div class="my-4 d-flex justify-content-center align-content-center">
            <input type="text" class="form-control mx-2 w-50 d-inline-block" v-model="newTask">
            <button class="btn text-white" @click="postTask">Add Task</button>
          </div>
        </header>
        <main>
          <ul class="list-group">
            <li class="list-group-item list-group-item-action d-flex justify-content-between"
              v-for="(task, index) in list" :key="index">
              <span :class="{'text-decoration-line-through' : task.done}">{{task.text}}</span>
              <i @click="removeTask(index)" class="fa-solid fa-trash fs-5"></i>
            </li>
          </ul>
          <!-- <div class="text-center">
            <h3>Congrats! You have finished your To Do List!</h3>
          </div> -->
        </main>
      </div>
    </div>
  </div>

</body>

</html>