# Survey-Form
A survey application used to demonstrate PHP, HTML, AJAX, Javascript, JQuery, MYSQL


![Alt Text](https://github.com/mateowartelle/Survey-Form/raw/master/AjaxExample.gif)

### Installation

```
git clone https://github.com/MateoWartelle/Survey-Form.git
cd Survey-Form
php -S localhost:3343 -t /Survey-Form
```

### Create Example Mysql Table

``` sql
USE Survey;
CREATE TABLE `Survey_Answers` (
  `q1` varchar(45) DEFAULT NULL,
  `q2` varchar(45) DEFAULT NULL,
  `q3` varchar(45) DEFAULT NULL,
  `q4` varchar(45) DEFAULT NULL
);
```

