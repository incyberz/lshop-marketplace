<style>
  #tombol-mobile{
    display: none;
    width:30px;
    height:30px;
    background: lightblue;
    border: solid 1px #ccc;
    border-radius: 5px;
    margin-right: 15px;
    padding: 2px 5px;
    cursor:pointer
  }

  #tombol-mobile:hover{
    background: pink
  }

  #tombol-mobile hr{
    margin: 5px 0;
    border: solid 1px black;
  }

  #header nav ul li a{
    text-decoration: none;
  }

  .badge {
    background: darkblue
  }

  @media (max-width: 875px) {
    #header nav ul{
      display: none;
      flex-direction: column;
      background: #ffffffcc;
      /* border: solid 2px red; */
      position: fixed;
      top: 56px;
      left: 0px;
      width: 100%;
      height: 100vh;
      text-align: center;
      padding: 15px;

    }


    #header nav ul li a{
      display: inline-block;
      padding: 10px;
    }

    #header nav ul li:hover{
      background: pink;
    }

    #tombol-mobile{
      display: block;
    }
  }
</style>
<header id="header">
  <div>
    <img src="img/logo2.png" alt="lshop-logo" id="header-logo" />
  </div>
  <nav class="navbar">
    <ul id='ul-nav'>
      <li><a href="?">Home</a></li>
      <li><a href="?produk">Produk</a></li>
      <li><a href="?keranjang">Keranjang <span class="badge" id=jumlah_item_keranjang><?=$jumlah_item_keranjang?></span></a></li>
      <?php
      echo $is_login ? "<li><a href='?user_profile'>$username</a></li>" : '';

      $link_login = "<li><a href='?login'>Login</a></li>"; 
      $link_logout = "<li><a href='?logout'>Logout</a></li>"; 
      echo $is_login ? $link_logout : $link_login;
      ?>
      <li><a href="?toko_kami">Toko Kami</a></li>
    </ul>
    <div id="tombol-mobile">
      <hr>
      <hr>
      <hr>
    </div>
  </nav>
</header>

<script>
  $(function(){
    $('#tombol-mobile').click(function(){
      $('#ul-nav').slideToggle();
    })
  })
</script>