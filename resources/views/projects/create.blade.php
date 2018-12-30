<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title></title>
    </head>
    <body>

        <h1>Create a New Project</h1>

        <form class="" action="/projects" method="post">

            {{ csrf_field() }}

            <div class="">

                <input type="text" name="title" placeholder="Project Title">

            </div>

            <div class="">

                <textarea name="description" placeholder="Project Description"></textarea>

            </div>

            <div class="">
                <button type="submiut">Create Project</button>
            </div>

        </form>

    </body>
</html>
