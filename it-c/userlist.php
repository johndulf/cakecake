<?php 
    include "includes/header.php";
    $app = "<script src='js/app.register.js'></script>";
    $fullname = isset($_SESSION['fullname']) ? $_SESSION['fullname'] : '';
    $role = isset($_SESSION['role']) ? $_SESSION['role'] : '';
?>
<?php if($role == 1): ?>
<div id="register-app" style="margin: 100px; padding: 100px;">
<!-- <form @submit="fnSave($event)">
    <input required type="text" name="fullname" placeholder="Fullname" v-model="fullname" /><br>
    <input required type="text" name="username" placeholder="Username" v-model="username" /><br>
    <input required type="password" name="password" placeholder="Password" v-model="password" /><br>
        <input required type="email" name="email" placeholder="Email" v-model="email" /><br>
    <button type="submit">REGISTER</button>
</form> -->

<table style="color: whitesmoke; margin: 100px; padding: 100px; justify-content: center; border: 1px solid black;" >
    <h1>User List</h1>
    <thead align="center">
        <tr>
            <th>Fullname</th>
            <th>Username</th>
            <th>Date Created</th>
            <th>Status</th>
            <th>Actions</th>
        </tr>
    </thead>
    <tbody>
        <tr v-for="user in users">
            <td>{{ user.fullname }}</td>
            <td>{{ user.username }}</td>
            <td>{{ user.datecreated }} </td>
            <td>{{ user.counterlock >= 3 ? 'Account Locked' : 'Active' }}</td>
            <td>
                <a href="#" @click="fnGetUsers(user.userid)" style="background-color: white; color: black;">Edit</a> | 
                <a href="#"@click="DeleteUser(user.userid)" style="background-color: white; color: black;">Delete</a> | 

                <a v-if="user.counterlock >= 3" href="#" @click="fnUnlockAccount(user.userid)">Unlock</a>
            </td>
        </tr>
    </tbody>
</table>
</div>
        <?php endif ?>
<?php include "includes/footer.php"; ?>
    
