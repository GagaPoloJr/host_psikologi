<style>
    #loading {
	z-index: 20;
	position: fixed;
	top: 0;
	width: 100%;
	height: 100%;
    /* background-color: rgba(0, 0, 0, 0.699); */
    background: linear-gradient(0deg, rgb(27, 0, 0) 0%, rgba(105, 15, 15, 0.473) 100%);
    transition: opacity 0.5s ease;
}
#loading-content {
	position: absolute;
	border: 16px solid #f3f3f3; /* Light grey */
	border-top: 16px solid #8f1f1f; /* Blue */
	border-radius: 50%;
	width: 50px;
	height: 50px;
	top: 50%;
	left:49%;
	animation: spin 2s linear infinite;
	}
	
	@keyframes spin {
		0% { transform: rotate(0deg); }
		100% { transform: rotate(360deg); }
	}

    .loading-finish {
    opacity: 0;
    pointer-events: none;
}
</style>
<section id="loading" class="loading">
    <div id="loading-content"></div>
  </section>

  <script src="{{ asset('js/template.js') }}"></script>
