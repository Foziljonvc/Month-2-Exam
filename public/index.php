<!doctype html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="src/output.css" rel="stylesheet">
</head>
<body>

<div class="flex justify-center items-center h-screen">
    <div>
        <form method="post" action="././index.php">
            <div class="flex justify-center items-center h-screen">
                <div>
                    <label for="input" class="block text-center text-lg font-medium text-gray-700">
                        <h1 class="text-xl font-bold">Text</h1>
                    </label>
                    <textarea name="input" id="input" placeholder="Enter the text" required
                              class="mt-2 block w-full p-2 border border-gray-300 rounded-md shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm"></textarea>
                    <button type="submit" class="mt-4 w-full bg-indigo-600 text-white py-2 px-4 rounded-md hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-indigo-500">
                        Submit
                    </button>
                </div>
            </div>
        </form>
    </div>
</div>


</body>
</html>