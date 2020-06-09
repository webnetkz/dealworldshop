<!DOCTYPE html>
<!--[if IE]><![endif]-->
<!--[if IE 8 ]><html dir="<?php echo $direction; ?>" lang="<?php echo $lang; ?>" class="ie8"><![endif]-->
<!--[if IE 9 ]><html dir="<?php echo $direction; ?>" lang="<?php echo $lang; ?>" class="ie9"><![endif]-->
<!--[if (gt IE 9)|!(IE)]><!-->
<html dir="<?php echo $direction; ?>" lang="<?php echo $lang; ?>">
<!--<![endif]-->
<head>
<meta charset="UTF-8" />
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<style>
#newMenu {
	background-color: rgba(255, 255, 255, 0);
}
.dropRightMenu {
	display: none;
	position: absolute;
	top: 0;
	left: 100%;
	height: 100%;
	width: 380%;
	background: rgb(252, 252, 242);
	padding: 10px;
	box-shadow: 0 0 10px black;
}
.allCatsItem {
	position: absolute;
	top: 0;
	display: block;
	width: 100%;
	margin-left: -10px;
	text-align: center;
	background: rgb(240, 240, 240);
	padding: 10px;
	font-weight: 600;
}
.allCatsItem:hover {
	cursor: pointer;
}
.dropMenuTwo {
	margin-top: 30px;
	display: flex;
	flex-wrap: wrap;
	justify-content: space-between;
	width: 100%;
}
.dropMenuTwo {
	list-style: none;
}
.dropMenuTwo > li {
	padding: 5px;
	flex: 1 0 33%;
}
.allCats {
	font-weight: 600;
	width: 20%;
	text-align: center;
	padding-bottom: 10px;
}
.allCats:hover {
	cursor: pointer;
}
.showAllCats {
	display: none;
	position: relative;
	top: -10px;
	width: 250px;
	height: 70%;
	z-index: 9999999;
	background: rgb(252, 252, 242);
	box-shadow: 0 0 10px black;
}
.showAllCats > ul {
	width: 100%;
	height: 100%;
	padding-left: 0;
}
.menuItem {
	list-style-type: none;
	padding-left: 10px;
	padding: 5px;
}
.menuItem:hover {
	background: rgb(240, 240, 240);
}
.menuLink {
	color: rgb(100, 100, 100);
	width: 100%!important;
}
</style>
<title><?php echo $title; if (isset($_GET['page'])) { echo " - ". ((int) $_GET['page'])." ".$text_page;} ?></title>
<base href="<?php echo $base; ?>" />
<?php if ($description) { ?>
<meta name="description" content="<?php echo $description; if (isset($_GET['page'])) { echo " - ". ((int) $_GET['page'])." ".$text_page;} ?>" />
<?php } ?>
<?php if ($keywords) { ?>
<meta name="keywords" content= "<?php echo $keywords; ?>" />
<?php } ?>
<meta property="og:title" content="<?php echo $title; if (isset($_GET['page'])) { echo " - ". ((int) $_GET['page'])." ".$text_page;} ?>" />
<meta property="og:type" content="website" />
<meta property="og:url" content="<?php echo $og_url; ?>" />
<?php if ($og_image) { ?>
<meta property="og:image" content="<?php echo $og_image; ?>" />
<?php } else { ?>
<meta property="og:image" content="<?php echo $logo; ?>" />
<?php } ?>
<meta property="og:site_name" content="<?php echo $name; ?>" />
<script src="catalog/view/javascript/jquery/jquery-2.1.1.min.js" type="text/javascript"></script>
<link href="catalog/view/javascript/bootstrap/css/bootstrap.min.css" rel="stylesheet" media="screen" />
<script src="catalog/view/javascript/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
<link href="catalog/view/javascript/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
<link href="//fonts.googleapis.com/css?family=Open+Sans:400,400i,300,700" rel="stylesheet" type="text/css" />
<link href="catalog/view/theme/default/stylesheet/stylesheet.css" rel="stylesheet">
<?php foreach ($styles as $style) { ?>
<link href="<?php echo $style['href']; ?>" type="text/css" rel="<?php echo $style['rel']; ?>" media="<?php echo $style['media']; ?>" />
<?php } ?>
<script src="catalog/view/javascript/common.js" type="text/javascript"></script>
<?php foreach ($links as $link) { ?>
<link href="<?php echo $link['href']; ?>" rel="<?php echo $link['rel']; ?>" />
<?php } ?>
<?php foreach ($scripts as $script) { ?>
<script src="<?php echo $script; ?>" type="text/javascript"></script>
<?php } ?>
<?php foreach ($analytics as $analytic) { ?>
<?php echo $analytic; ?>
<?php } ?>
</head>
<body class="<?php echo $class; ?>">
<nav id="top">
  <div class="container">
    <?php echo $currency; ?>
    <?php echo $language; ?>
    <div id="top-links" class="nav pull-right">
      <ul class="list-inline">
        <li><a href="<?php echo $contact; ?>"><i class="fa fa-phone"></i></a> <span class="hidden-xs hidden-sm hidden-md"><?php echo $telephone; ?></span></li>
        <li class="dropdown"><a href="<?php echo $account; ?>" title="<?php echo $text_account; ?>" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user"></i> <span class="hidden-xs hidden-sm hidden-md"><?php echo $text_account; ?></span> <span class="caret"></span></a>
          <ul class="dropdown-menu dropdown-menu-right">
            <?php if ($logged) { ?>
            <li><a href="<?php echo $account; ?>"><?php echo $text_account; ?></a></li>
            <li><a href="<?php echo $order; ?>"><?php echo $text_order; ?></a></li>
            <li><a href="<?php echo $transaction; ?>"><?php echo $text_transaction; ?></a></li>
            <li><a href="<?php echo $download; ?>"><?php echo $text_download; ?></a></li>
            <li><a href="<?php echo $logout; ?>"><?php echo $text_logout; ?></a></li>
            <?php } else { ?>
            <li><a href="<?php echo $register; ?>"><?php echo $text_register; ?></a></li>
            <li><a href="<?php echo $login; ?>"><?php echo $text_login; ?></a></li>
            <?php } ?>
          </ul>
        </li>
        <li><a href="<?php echo $wishlist; ?>" id="wishlist-total" title="<?php echo $text_wishlist; ?>"><i class="fa fa-heart"></i> <span class="hidden-xs hidden-sm hidden-md"><?php echo $text_wishlist; ?></span></a></li>
        <li><a href="<?php echo $shopping_cart; ?>" title="<?php echo $text_shopping_cart; ?>"><i class="fa fa-shopping-cart"></i> <span class="hidden-xs hidden-sm hidden-md"><?php echo $text_shopping_cart; ?></span></a></li>
        <li><a href="<?php echo $checkout; ?>" title="<?php echo $text_checkout; ?>"><i class="fa fa-share"></i> <span class="hidden-xs hidden-sm hidden-md"><?php echo $text_checkout; ?></span></a></li>
      </ul>
    </div>
  </div>
</nav>
<header>
  <div class="container">
    <div class="row">
      <div class="col-sm-4">
        <div id="logo">
          <?php if ($logo) { ?>
            <?php if ($home == $og_url) { ?>
              <img src="<?php echo $logo; ?>" title="<?php echo $name; ?>" alt="<?php echo $name; ?> class="img-responsive" />
            <?php } else { ?>
              <a href="<?php echo $home; ?>"><img src="<?php echo $logo; ?>" title="<?php echo $name; ?>" alt="<?php echo $name; ?>" class="img-responsive" /></a>
            <?php } ?>
          <?php } else { ?>
            <h1><a href="<?php echo $home; ?>"><?php echo $name; ?></a></h1>
          <?php } ?>
        </div>
      </div>
      <div class="col-sm-5"><?php echo $search; ?>
      </div>
      <div class="col-sm-3"><?php echo $cart; ?></div>
    </div>
  </div>
</header>
<?php if ($categories) { ?>



<div class="container">
  <nav id="newMenu">
    <p class="allCats">Каталог товаров</p>
    <div class="showAllCats">
      <ul>
    <?php foreach ($categories as $category) { ?>
    <?php if ($category['children']) { ?>
        <!--<a class="" href="<?php echo $category['href']; ?>">-->
          <li class="dropDownItem menuLink menuItem"><?php echo $category['name']; ?></li>
        <!--</a>-->
            


          <div class="dropRightMenu">
            <div class="dropdown-inner">
              <?php foreach (array_chunk($category['children'], ceil(count($category['children']) / $category['column'])) as $children) { ?>
              <ul class="dropMenuTwo">
                <?php foreach ($children as $child) { ?>
                <li><a href="<?php echo $child['href']; ?>"><?php echo $child['name']; ?></a></li>
                <?php } ?>
              </ul>
              <?php } ?>
            </div>
            <a href="<?php echo $category['href']; ?>" class="allCatsItem"><?php echo $text_all; ?> <?php echo $category['name']; ?></a> </div>
        



      <?php } else { ?>
        <a class="menuLink" href="<?php echo $category['href']; ?>">
          <li class="menuItem">
            <?php echo $category['name']; ?>
          </li>
        </a>
    <?php } ?>
    <?php } ?>
      </ul>
    </div>
  </nav>
</div>
<?php } ?>

<script>
  let allCats = document.querySelector('.allCats');
  let showAllCats = document.querySelector('.showAllCats');

  allCats.addEventListener('mousemove', () => {
    showAllCats.style.display = 'block';
  });
  showAllCats.addEventListener('mousemove', () => {
    showAllCats.style.display = 'block';
  });
  allCats.addEventListener('mouseout', () => {
    showAllCats.style.display = 'none';
  });
  showAllCats.addEventListener('mouseout', () => {
    showAllCats.style.display = 'none';
  });

  let dropDownItem = document.querySelectorAll('.dropDownItem');
  for(let i = 0; i < dropDownItem.length; i++) {
    dropDownItem[i].addEventListener('mousemove',() => {
      console.log(dropDownItem[i]);
      let dropRightMenu = dropDownItem[i].nextSibling;
      dropRightMenu = dropRightMenu.nextSibling;
      dropRightMenu = dropRightMenu.nextSibling;
      dropRightMenu = dropRightMenu.nextSibling;
      dropRightMenu.style.display = 'block';

      dropRightMenu.addEventListener('mousemove', () => {
        dropRightMenu.style.display = 'block';
      });

      dropRightMenu.addEventListener('mouseout', () => {
        dropRightMenu.style.display = 'none';
      });

      dropDownItem[i].addEventListener('mouseout', () => {
        dropRightMenu.style.display = 'none';
      });
    });
  }
</script>
