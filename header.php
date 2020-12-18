<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $title;?></title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">

    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <script
  src="https://code.jquery.com/jquery-3.5.1.min.js"
  integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0="
  crossorigin="anonymous"></script>
  <link rel="stylesheet" href="css/style.css">
</head>
<body>
<header>
  <div class="navbar_wrapper">
<div class="navbar" id="navbar">
        <div class="logo">
          <a href="index.php"><img src="images/AlizaLogo.jpeg" alt=""></a>
          
        </div>
        <nav>  
        <div class="left_nav">
        <p class="menu-icon" onclick="openNav()">
                <i class="fas fa-bars"></i>
            </p>
            <div id="MenuItems">
                <p class="close-nav" ><i onclick="closeNav()" class="far fa-window-close"></i></p>
                <ul>
                <li><a href="index.php">Home <i class="fas fa-user-alt"></i></a></li>
                <li><a href="portfolio.php">Website Portfolio<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.com/svgjs" version="1.1" width="512" height="512" x="0" y="0" viewBox="0 0 64 64" style="enable-background:new 0 0 512 512" xml:space="preserve"><g><g xmlns="http://www.w3.org/2000/svg" id="Project-Innovation-Idea-Management-Control"><path d="m4 57v-50a3 3 0 0 1 3-3h31v5a3 3 0 0 0 3 3h5v20h2v-21a1 1 0 0 0 -.293-.707l-8-8a1 1 0 0 0 -.707-.293h-32a5.006 5.006 0 0 0 -5 5v50a5.006 5.006 0 0 0 5 5h31v-2h-31a3 3 0 0 1 -3-3zm36-48v-3.586l4.586 4.586h-3.586a1 1 0 0 1 -1-1z" fill="#ffffff" data-original="#000000" style=""/><path d="m33 20a8 8 0 0 0 -8.136-8 8.09 8.09 0 0 0 -7.858 7.705 8.006 8.006 0 0 0 2.386 5.99 5.17 5.17 0 0 1 1.569 3.305h-1.961v2h2v2a2 2 0 0 0 2 2h4a2 2 0 0 0 2-2v-2h2v-2h-1.963a4.979 4.979 0 0 1 1.5-3.231 7.915 7.915 0 0 0 2.463-5.769zm-10 13v-2h4v2zm4.01-4h-4.02a7.166 7.166 0 0 0 -2.2-4.731 5.923 5.923 0 0 1 -1.79-4.491 6 6 0 0 1 10.2-4.056 5.989 5.989 0 0 1 -.057 8.6 7.009 7.009 0 0 0 -2.133 4.678z" fill="#ffffff" data-original="#000000" style=""/><path d="m25 21a1 1 0 0 1 -1-1h-2a3 3 0 0 0 2 2.816v4.184h2v-4.184a3 3 0 0 0 2-2.816h-2a1 1 0 0 1 -1 1z" fill="#ffffff" data-original="#000000" style=""/><path d="m24 8h2v2h-2z" fill="#ffffff" data-original="#000000" style=""/><path d="m18.5 9.474h2v2h-2z" transform="matrix(.866 -.5 .5 .866 -2.624 11.151)" fill="#ffffff" data-original="#000000" style=""/><path d="m14.473 13.5h2v2h-2z" transform="matrix(.5 -.866 .866 .5 -4.82 20.652)" fill="#ffffff" data-original="#000000" style=""/><path d="m13 19h2v2h-2z" fill="#ffffff" data-original="#000000" style=""/><path d="m14.473 24.5h2v2h-2z" transform="matrix(.866 -.5 .5 .866 -10.676 11.151)" fill="#ffffff" data-original="#000000" style=""/><path d="m33.526 24.5h2v2h-2z" transform="matrix(.5 -.866 .866 .5 -4.819 42.654)" fill="#ffffff" data-original="#000000" style=""/><path d="m35 19h2v2h-2z" fill="#ffffff" data-original="#000000" style=""/><path d="m33.526 13.5h2v2h-2z" transform="matrix(.866 -.5 .5 .866 -2.625 19.202)" fill="#ffffff" data-original="#000000" style=""/><path d="m29.5 9.474h2v2h-2z" transform="matrix(.5 -.866 .866 .5 6.181 31.653)" fill="#ffffff" data-original="#000000" style=""/><path d="m61.142 45.01-2.682-.383a10.86 10.86 0 0 0 -.679-1.639l1.625-2.166a1 1 0 0 0 -.093-1.307l-2.828-2.828a1 1 0 0 0 -1.306-.093l-2.167 1.624a10.9 10.9 0 0 0 -1.639-.678l-.383-2.682a1 1 0 0 0 -.99-.858h-4a1 1 0 0 0 -.99.858l-.383 2.682a10.855 10.855 0 0 0 -1.639.678l-2.167-1.624a1 1 0 0 0 -1.306.093l-2.828 2.828a1 1 0 0 0 -.093 1.307l1.625 2.166a10.86 10.86 0 0 0 -.679 1.639l-2.682.383a1 1 0 0 0 -.858.99v4a1 1 0 0 0 .858.99l2.682.383a10.86 10.86 0 0 0 .679 1.639l-1.625 2.166a1 1 0 0 0 .093 1.307l2.828 2.828a1 1 0 0 0 1.306.093l2.167-1.624a10.855 10.855 0 0 0 1.639.678l.383 2.682a1 1 0 0 0 .99.858h4a1 1 0 0 0 .99-.858l.383-2.682a10.9 10.9 0 0 0 1.639-.678l2.167 1.624a1 1 0 0 0 1.306-.093l2.828-2.828a1 1 0 0 0 .093-1.307l-1.625-2.166a10.86 10.86 0 0 0 .679-1.639l2.682-.383a1 1 0 0 0 .858-.99v-4a1 1 0 0 0 -.858-.99zm-1.142 4.123-2.463.352a1 1 0 0 0 -.827.742 8.923 8.923 0 0 1 -.977 2.357 1 1 0 0 0 .061 1.111l1.492 1.99-1.6 1.6-1.991-1.492a1 1 0 0 0 -1.11-.06 8.859 8.859 0 0 1 -2.356.975 1 1 0 0 0 -.744.828l-.352 2.464h-2.266l-.351-2.463a1 1 0 0 0 -.744-.828 8.859 8.859 0 0 1 -2.356-.975 1 1 0 0 0 -1.11.06l-1.991 1.492-1.6-1.6 1.492-1.99a1 1 0 0 0 .061-1.111 8.923 8.923 0 0 1 -.977-2.357 1 1 0 0 0 -.827-.742l-2.464-.353v-2.266l2.463-.352a1 1 0 0 0 .827-.742 8.923 8.923 0 0 1 .977-2.357 1 1 0 0 0 -.061-1.111l-1.492-1.99 1.6-1.6 1.991 1.492a1 1 0 0 0 1.11.06 8.859 8.859 0 0 1 2.356-.975 1 1 0 0 0 .744-.828l.352-2.464h2.266l.351 2.463a1 1 0 0 0 .744.828 8.859 8.859 0 0 1 2.356.975 1 1 0 0 0 1.11-.06l1.991-1.492 1.6 1.6-1.492 1.99a1 1 0 0 0 -.061 1.111 8.923 8.923 0 0 1 .977 2.357 1 1 0 0 0 .827.742l2.464.353z" fill="#ffffff" data-original="#000000" style=""/><path d="m48 42a6 6 0 1 0 6 6 6.006 6.006 0 0 0 -6-6zm0 10a4 4 0 1 1 4-4 4 4 0 0 1 -4 4z" fill="#ffffff" data-original="#000000" style=""/><path d="m47 38h2v2h-2z" fill="#ffffff" data-original="#000000" style=""/><path d="m40.636 40.636h2v2h-2z" transform="matrix(.707 -.707 .707 .707 -17.246 41.626)" fill="#ffffff" data-original="#000000" style=""/><path d="m38 47h2v2h-2z" fill="#ffffff" data-original="#000000" style=""/><path d="m40.636 53.364h2v2h-2z" transform="matrix(.707 -.707 .707 .707 -26.246 45.364)" fill="#ffffff" data-original="#000000" style=""/><path d="m47 56h2v2h-2z" fill="#ffffff" data-original="#000000" style=""/><path d="m53.364 53.364h2v2h-2z" transform="matrix(.707 -.707 .707 .707 -22.518 54.351)" fill="#ffffff" data-original="#000000" style=""/><path d="m56 47h2v2h-2z" fill="#ffffff" data-original="#000000" style=""/><path d="m53.364 40.636h2v2h-2z" transform="matrix(.707 -.707 .707 .707 -13.517 50.648)" fill="#ffffff" data-original="#000000" style=""/><path d="m8 39h18v2h-18z" fill="#ffffff" data-original="#000000" style=""/><path d="m28 39h4v2h-4z" fill="#ffffff" data-original="#000000" style=""/><path d="m8 43h24v2h-24z" fill="#ffffff" data-original="#000000" style=""/><path d="m8 47h2v2h-2z" fill="#ffffff" data-original="#000000" style=""/><path d="m12 47h20v2h-20z" fill="#ffffff" data-original="#000000" style=""/><path d="m8 51h24v2h-24z" fill="#ffffff" data-original="#000000" style=""/></g></g></svg>
</a></li>
                <li ><a href="artPortfolio.php">Art Portfolio</a></li>
               
             
            
                <li><a href="about.php">About Me
<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.com/svgjs" version="1.1" width="512" height="512" x="0" y="0" viewBox="0 0 512 512" style="enable-background:new 0 0 512 512" xml:space="preserve" class=""><g>
<g xmlns="http://www.w3.org/2000/svg">
	<g>
		<path d="M414.007,148.75c5.522,0,10-4.477,10-10V30c0-16.542-13.458-30-30-30h-364c-16.542,0-30,13.458-30,30v452    c0,16.542,13.458,30,30,30h364c16.542,0,30-13.458,30-30v-73.672c0-5.523-4.478-10-10-10c-5.522,0-10,4.477-10,10V482    c0,5.514-4.486,10-10,10h-364c-5.514,0-10-4.486-10-10V30c0-5.514,4.486-10,10-10h364c5.514,0,10,4.486,10,10v108.75    C404.007,144.273,408.485,148.75,414.007,148.75z" fill="#ffffff" data-original="#000000" style=""/>
	</g>
</g>
<g xmlns="http://www.w3.org/2000/svg">
	<g>
		<path d="M212.007,54c-50.729,0-92,41.271-92,92c0,26.317,11.11,50.085,28.882,66.869c0.333,0.356,0.687,0.693,1.074,1    c16.371,14.979,38.158,24.13,62.043,24.13c23.885,0,45.672-9.152,62.043-24.13c0.387-0.307,0.741-0.645,1.074-1    c17.774-16.784,28.884-40.552,28.884-66.869C304.007,95.271,262.736,54,212.007,54z M212.007,218    c-16.329,0-31.399-5.472-43.491-14.668c8.789-15.585,25.19-25.332,43.491-25.332c18.301,0,34.702,9.747,43.491,25.332    C243.405,212.528,228.336,218,212.007,218z M196.007,142v-6.5c0-8.822,7.178-16,16-16s16,7.178,16,16v6.5c0,8.822-7.178,16-16,16    S196.007,150.822,196.007,142z M269.947,188.683c-7.375-10.938-17.596-19.445-29.463-24.697c4.71-6.087,7.523-13.712,7.523-21.986    v-6.5c0-19.851-16.149-36-36-36s-36,16.149-36,36v6.5c0,8.274,2.813,15.899,7.523,21.986    c-11.867,5.252-22.088,13.759-29.463,24.697c-8.829-11.953-14.06-26.716-14.06-42.683c0-39.701,32.299-72,72-72s72,32.299,72,72    C284.007,161.967,278.776,176.73,269.947,188.683z" fill="#ffffff" data-original="#000000" style=""/>
	</g>
</g>
<g xmlns="http://www.w3.org/2000/svg">
	<g>
		<path d="M266.007,438h-54c-5.522,0-10,4.477-10,10s4.478,10,10,10h54c5.522,0,10-4.477,10-10S271.529,438,266.007,438z" fill="#ffffff" data-original="#000000" style=""/>
	</g>
</g>
<g xmlns="http://www.w3.org/2000/svg">
	<g>
		<path d="M266.007,382h-142c-5.522,0-10,4.477-10,10s4.478,10,10,10h142c5.522,0,10-4.477,10-10S271.529,382,266.007,382z" fill="#ffffff" data-original="#000000" style=""/>
	</g>
</g>
<g xmlns="http://www.w3.org/2000/svg">
	<g>
		<path d="M266.007,326h-142c-5.522,0-10,4.477-10,10s4.478,10,10,10h142c5.522,0,10-4.477,10-10S271.529,326,266.007,326z" fill="#ffffff" data-original="#000000" style=""/>
	</g>
</g>
<g xmlns="http://www.w3.org/2000/svg">
	<g>
		<path d="M88.366,272.93c-1.859-1.86-4.439-2.93-7.079-2.93c-2.631,0-5.211,1.07-7.07,2.93c-1.86,1.86-2.93,4.44-2.93,7.07    s1.069,5.21,2.93,7.07c1.87,1.86,4.439,2.93,7.07,2.93c2.64,0,5.21-1.07,7.079-2.93c1.86-1.86,2.931-4.44,2.931-7.07    S90.227,274.79,88.366,272.93z" fill="#ffffff" data-original="#000000" style=""/>
	</g>
</g>
<g xmlns="http://www.w3.org/2000/svg">
	<g>
		<path d="M88.366,328.93c-1.869-1.86-4.439-2.93-7.079-2.93c-2.631,0-5.2,1.07-7.07,2.93c-1.86,1.86-2.93,4.44-2.93,7.07    s1.069,5.21,2.93,7.07c1.87,1.86,4.439,2.93,7.07,2.93c2.64,0,5.21-1.07,7.079-2.93c1.86-1.86,2.931-4.44,2.931-7.07    S90.227,330.79,88.366,328.93z" fill="#ffffff" data-original="#000000" style=""/>
	</g>
</g>
<g xmlns="http://www.w3.org/2000/svg">
	<g>
		<path d="M88.366,384.93c-1.869-1.86-4.439-2.93-7.079-2.93c-2.631,0-5.2,1.07-7.07,2.93c-1.86,1.86-2.93,4.44-2.93,7.07    s1.069,5.21,2.93,7.07c1.859,1.86,4.439,2.93,7.07,2.93c2.64,0,5.22-1.07,7.079-2.93c1.86-1.86,2.931-4.44,2.931-7.07    S90.227,386.79,88.366,384.93z" fill="#ffffff" data-original="#000000" style=""/>
	</g>
</g>
<g xmlns="http://www.w3.org/2000/svg">
	<g>
		<path d="M266.007,270h-142c-5.522,0-10,4.477-10,10s4.478,10,10,10h142c5.522,0,10-4.477,10-10S271.529,270,266.007,270z" fill="#ffffff" data-original="#000000" style=""/>
	</g>
</g>
<g xmlns="http://www.w3.org/2000/svg">
	<g>
		<path d="M491.002,130.32c-9.715-5.609-21.033-7.099-31.871-4.196c-10.836,2.904-19.894,9.854-25.502,19.569L307.787,363.656    c-0.689,1.195-1.125,2.52-1.278,3.891l-8.858,79.344c-0.44,3.948,1.498,7.783,4.938,9.77c1.553,0.896,3.278,1.34,4.999,1.34    c2.092,0,4.176-0.655,5.931-1.948l64.284-47.344c1.111-0.818,2.041-1.857,2.73-3.052l125.841-217.963    C517.954,167.638,511.058,141.9,491.002,130.32z M320.063,426.394l4.626-41.432l28.942,16.71L320.063,426.394z M368.213,386.996    l-38.105-22l100.985-174.91l38.105,22L368.213,386.996z M489.054,177.693l-9.857,17.073l-38.105-22l9.857-17.073    c2.938-5.089,7.682-8.729,13.358-10.25c5.678-1.522,11.606-0.74,16.694,2.198c5.089,2.938,8.729,7.682,10.25,13.358    C492.772,166.675,491.992,172.604,489.054,177.693z" fill="#ffffff" data-original="#000000" style=""/>
	</g>
</g>
<g xmlns="http://www.w3.org/2000/svg">
</g>
<g xmlns="http://www.w3.org/2000/svg">
</g>
<g xmlns="http://www.w3.org/2000/svg">
</g>
<g xmlns="http://www.w3.org/2000/svg">
</g>
<g xmlns="http://www.w3.org/2000/svg">
</g>
<g xmlns="http://www.w3.org/2000/svg">
</g>
<g xmlns="http://www.w3.org/2000/svg">
</g>
<g xmlns="http://www.w3.org/2000/svg">
</g>
<g xmlns="http://www.w3.org/2000/svg">
</g>
<g xmlns="http://www.w3.org/2000/svg">
</g>
<g xmlns="http://www.w3.org/2000/svg">
</g>
<g xmlns="http://www.w3.org/2000/svg">
</g>
<g xmlns="http://www.w3.org/2000/svg">
</g>
<g xmlns="http://www.w3.org/2000/svg">
</g>
<g xmlns="http://www.w3.org/2000/svg">
</g>
</g></svg></a></li>
                <li><a class="nav-last" href="contact.php">Contact Me<i class="fas fa-phone-square-alt"></i></a></li>
                </ul>
</div>
            </div>
        </nav>
   </div>
   
   </div>

    
