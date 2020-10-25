<template>
 <div class="header flex">
   <div class="left">
     <img class="logo" src="../assets/logo.png"/>
   </div>
   <div class="right flex">
     <p @click="$router.push('/signup')">新規登録</p>
     <p @click="$router.push('/')">ログイン</p>
   </div>
 </div>
</template>

<style scoped>
.right {
 align-items: center;
}
.right p {
 margin-right: 20px;
 cursor: pointer;
}
.header {
 margin: 20px;
}
.logo {
 width: 150px;
 cursor: pointer;
}
.flex {
 display: flex;
 justify-content: space-between;
}
</style>