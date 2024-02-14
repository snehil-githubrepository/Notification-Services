# 1st commit

Slow working of Notifications through the Mail without no queue

---

# 2nd commit

-   Pretty fast working of Notifications using the `Queue` Method.

```
Create Jobs table from this command
```

```shell
php artisan queue:table
```

-   to create a jobs table in database in jobs.

Now, when you hit the route that is supposed to send notifications, it will transfer a request of sending notification to the database and everytime you refresh new notification gets saved in database.

_As soon as you Run *php artisan serve* in one tab and *php artisan queue:listen* in another, we see instant loading of the route page and instant notification gets send from the things that were first being stored in database, now they move from jobs table and notifications get sent_

---
