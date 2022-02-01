<script src="https://code.jquery.com/jquery-3.4.1.js"> </script>

<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

<script type="module">
    // Import the functions you need from the SDKs you need
  import { initializeApp } from "https://www.gstatic.com/firebasejs/9.6.5/firebase-app.js";
  import { getAnalytics } from "https://www.gstatic.com/firebasejs/9.6.5/firebase-analytics.js";
  // TODO: Add SDKs for Firebase products that you want to use
  // https://firebase.google.com/docs/web/setup#available-libraries

  // Your web app's Firebase configuration
  // For Firebase JS SDK v7.20.0 and later, measurementId is optional
  const firebaseConfig = {
    apiKey: "AIzaSyB1fGf7c2KD6QBh7EMFfhOdZ0LUQ1RalzA",
    authDomain: "gt22-d7558.firebaseapp.com",
    databaseURL: "https://gt22-d7558-default-rtdb.firebaseio.com",
    projectId: "gt22-d7558",
    storageBucket: "gt22-d7558.appspot.com",
    messagingSenderId: "944926080880",
    appId: "1:944926080880:web:b9fe9c4c69e0e3cfd299b5",
    measurementId: "G-610CBXJLBR"
  };

  // Initialize Firebase
  const app = initializeApp(firebaseConfig);
  const analytics = getAnalytics(app);
</script>
</body>

</html>