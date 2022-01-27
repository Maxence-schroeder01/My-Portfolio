   
    // Create new XMLHttpRequest object
    const xhr = new XMLHttpRequest();
    
    // GitHub endpoint, dynamically passing in specified username
    const url = `https://api.github.com/users/Maxence-schroeder01/repos`;

    // Open a new connection, using a GET request via URL endpoint
    // Providing 3 arguments (GET/POST, The URL, Async True/False)
    xhr.open('GET', url, true);
    
    // When request is received
    // Process it here
    xhr.onload = function() {
        var outhtml = '';
        // Parse API data into JSON
        const datas = JSON.parse(this.response);
        datas.forEach(data => {
           outhtml = outhtml + (`

            <div class="card">
            <div class="box">
            <div class="content">
                <h1>${data.name}</h1>
                <h5> ${data.description}</h5>
                <p><a href="${data.html_url}">Pour en Savoir Plus</a></p>
                <h6><strong>Language : </strong>${data.language}</h6>

                </div>
                </div>
                </div>
            `);
        });
        document.getElementById('ghapidata').innerHTML =outhtml;
    
    }
    
    // Send the request to the server
    xhr.send()