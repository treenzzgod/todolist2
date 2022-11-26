CREATE DATABASE todolist2;
USE todolist2;

CREATE TABLE task (
  id_task INT NOT NULL AUTO_INCREMENT,
  title VARCHAR(255) NOT NULL,
  description VARCHAR(255) NOT NULL,
  status VARCHAR(255) NOT NULL,
  PRIMARY KEY (id_task)
);

--insert data task

INSERT INTO task (title, description, status) VALUES ('Task 1', 'Description 1', 'Done');