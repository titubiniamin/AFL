<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Language Selector</title>
    <style>
        .language-selector {
            display: inline-block;
            position: relative;
        }

        .flag-display {
            font-size: 30px;
            padding: 5px;
            cursor: pointer;
            border: 1px solid #ccc;
            border-radius: 4px;
        }

        .dropdown {
            position: absolute;
            top: 40px; /* Adjust as needed */
            left: 0;
            display: block;
            border: 1px solid #ccc;
            padding: 5px;
            background-color: white;
            z-index: 100;
            width: 100%;
        }

        .hidden {
            display: none;
        }

        select {
            font-size: 16px;
            width: 100%;
            border: none;
            background: none;
            outline: none;
        }
    </style>
</head>
<body>

<div class="language-selector">
    <div id="selectedFlag" class="flag-display" onclick="toggleDropdown()">🇺🇸</div>
    <div id="dropdownContainer" class="dropdown hidden">
        <select id="languageDropdown" onchange="updateFlag()" size="4">
            <option value="en" data-flag="🇺🇸">🇺🇸 English</option>
            <option value="fr" data-flag="🇫🇷">🇫🇷 French</option>
            <option value="es" data-flag="🇪🇸">🇪🇸 Spanish</option>
            <option value="de" data-flag="🇩🇪">🇩🇪 German</option>
        </select>
    </div>
</div>

<script>
    function toggleDropdown() {
        var dropdownContainer = document.getElementById("dropdownContainer");
        dropdownContainer.classList.toggle("hidden");
    }

    function updateFlag() {
        var dropdown = document.getElementById("languageDropdown");
        var selectedOption = dropdown.options[dropdown.selectedIndex];
        var flag = selectedOption.getAttribute("data-flag");

        // Show only the selected flag
        var flagDisplay = document.getElementById("selectedFlag");
        flagDisplay.innerHTML = flag;

        // Hide the dropdown after selection
        var dropdownContainer = document.getElementById("dropdownContainer");
        dropdownContainer.classList.add("hidden");
    }

    // Optional: Hide dropdown if clicking outside
    document.addEventListener('click', function(event) {
        var dropdownContainer = document.getElementById("dropdownContainer");
        var flagDisplay = document.getElementById("selectedFlag");
        if (!flagDisplay.contains(event.target) && !dropdownContainer.contains(event.target)) {
            dropdownContainer.classList.add("hidden");
        }
    });
</script>

</body>
</html>
