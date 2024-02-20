# Simple Web Application

This is a simple web application that includes an HTML form styled with CSS. The application can be dockerized using the provided Dockerfile to easily run it in a Docker container.



To build the Docker image, run the following command in your terminal:

```bash
docker build -t version1 .
```

To run a Docker container based on the built image, use the following command:

```
docker run -d -p 8080:80 version1
```

This command will run a container and map port 8080 of your host machine to port 80 of the container. You can then access the web application by navigating to http://localhost:8080/index.html in your web browser.