<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chapter 8: Systems Design</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        body {
            font-family: Arial, sans-serif;
            color: #333;
            background-color: #f8f9fa;
            padding: 20px;
        }

        h1 {
            color: #007bff;
            font-size: 28px;
            margin-bottom: 20px;
        }

        h2 {
            color: #28a745;
            font-size: 24px;
            margin-bottom: 10px;
        }

        h3 {
            color: #dc3545;
            font-size: 20px;
            margin-bottom: 10px;
        }

        p {
            font-size: 16px;
            margin-bottom: 10px;
        }

        ul {
            margin-bottom: 10px;
        }

        li {
            margin-bottom: 5px;
        }
    </style>
</head>

<body>

    <!-- Navigation Links -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container" id="container">
            <a class="navbar-brand" href="homepage.php">Homepage</a>
        </div>
    </nav>

    <div class="container">
        <hr>
        <h2>Chapter 8: Systems Design</h2>
        <ol>
            <!-- Systems Design Introduction -->
            <li>
                <h3>Chapter 8: Systems Design</h3>
                <p>Imagine creating a new video game. Systems design is like planning the game's ins and outs to meet player needs and run smoothly.</p>
            </li>

            <!-- Objectives of Systems Design -->
            <li>
                <h3>Objectives of Systems Design</h3>
                <p>Ensure the game lets you complete missions, get rewards, and see scores. Make the game user-friendly, reliable, secure, and accessible to all.</p>
            </li>

            <!-- Product Design Characteristics -->
            <li>
                <h3>Product Design Characteristics</h3>
                <ul>
                    <li>Maintainable: Easily update or fix the game.</li>
                    <li>Well-documented: Provide instructions on how the game works.</li>
                    <li>Modular: Build the game in small, neatly fitting parts.</li>
                    <li>Extensible: Add new features or levels easily.</li>
                    <li>Simple: Keep it understandable for players.</li>
                    <li>Efficient: Use computer resources wisely.</li>
                    <li>Reusable: Incorporate existing features.</li>
                    <li>Testable: Check the game's performance with tests.</li>
                </ul>
            </li>

            <!-- Systems Design Objectives -->
            <li>
                <h3>Systems Design Objectives</h3>
                <ul>
                    <li>Conformant: Follow specific rules and standards.</li>
                    <li>Compatible: Work with other games or software.</li>
                    <li>Interoperable: Share data or cooperate with other games.</li>
                </ul>
                <p>Systems design ensures a game is not just fun but also reliable, safe, and easy to understand, laying out these plans before the actual game creation.</p>
            </li>

            <!-- Constraints Upon Systems Design -->
            <li>
                <h3>Constraints Upon Systems Design</h3>
                <p>Creating a project involves navigating limits like budget, time, tech rules, and organizational and legal factors. It's a creative process within set boundaries, with clear instructions being crucial for success.</p>
                <ul>
                    <li>Project Constraints: Money (Budget), Timescale.</li>
                    <li>Technical Constraints: Skills/Resources, Hardware/Software, Legacy Systems.</li>
                    <li>Organizational Constraints: Politics, Stakeholders, Standards.</li>
                    <li>Legal and Cultural Constraints: Legislation, Cultural Differences.</li>
                    <li>Quality of Requirements: Project success hinges on clear instructions; unclear ones cause issues.</li>
                </ul>
            </li>

            <!-- Systems Design in the Development Lifecycle -->
            <li>
                <h3>Systems Design in the Development Lifecycle</h3>
                <p>Systems Design is like creating a master plan for your game or app. The approach depends on whether you want a detailed plan from the start or prefer building and improving as you go!</p>
                <ul>
                    <li>Overview: In making things like games or apps, "Systems Design" is crucial for planning how everything works.</li>
                    <li>Approaches: Big Design Up Front (Waterfall), Divide and Conquer (Agile).</li>
                    <li>Development Lifecycle Models: Waterfall Model, 'V' Model, Incremental Model, Iterative Model.</li>
                    <li>Agile Approach (Iterative): Focus, Decision Making, Process.</li>
                </ul>
            </li>

            <!-- The Scope of Design -->
            <li>
                <h3>The Scope of Design</h3>
                <p>Focus on Inputs, Processes, Outputs, Data, and Controls in design. Considerations for Input and Output Design, User Interface Design, and How Data Moves.</p>
                <ul>
                    <li>Inputs: Information given to the computer, like controlling a game character.</li>
                    <li>Processes: What the computer does with input, such as responding to game clicks.</li>
                    <li>Outputs: Results seen, like character movement or a high score.</li>
                    <li>Data: Information used to make the system work.</li>
                    <li>Controls: Ensure system security and proper function.</li>
                    <li>User Interface Design: Focus on consistency, logical flow, clear instructions, and error messages.</li>
                    <li>Input Design: Focus on efficiency, reliability, speed, error reduction.</li>
                    <li>How Data Moves in a Computer System: Original Recording, Transmission, Transcription, Verification, Validation, Storage.</li>
                    <li>Design Decisions: Minimize Recorded Data, Transmission, Transcription; Verify and Validate; Choose Appropriate Technologies.</li>
                    <li>Different Input Technologies: Direct Input Devices, Indirect Input Devices.</li>
                    <li>Output Design: Efficiency, Reliability and Timing, Accuracy, Usability, Clarity, Relevance, Quality, Cost.</li>
                    <li>Different Output Technologies: Printers, Screens, Speakers.</li>
                    <li>Output Interfaces: Present outputs through screen interfaces, printed reports, or electronic documents.</li>
                    <li>System to System Data Interchange: Use mechanisms like Electronic Data Interchange (EDI) or XML data files for system data sharing.</li>
                </ul>
            </li>

            <!-- Process Design -->
            <li>
                <h3>Process Design in Game Development</h3>
                <p>In game development, process design involves planning and organizing, ensuring a smooth and awesome gaming experience.</p>
                <ul>
                    <li>High-Level System Design: Plan major features like levels, characters, and interactions.</li>
                    <li>Detailed Program Specification: Design specific features, detailing step-by-step instructions.</li>
                    <li>Different Environments: Design complexity based on the target audience and platforms.</li>
                    <li>Module Design: Break down the game into smaller, functional pieces.</li>
                    <li>Interfaces: Define communication between different parts of the game.</li>
                    <li>Stepwise Refinement: Zoom in on details, adding specifics like item selection and payment.</li>
                    <li>Coupling and Cohesion: Determine how different game parts should connect, balancing functionality.</li>
                    <li>Object-Oriented Design: View the game as objects with specific roles.</li>
                    <li>Abstraction, Generalization, and Polymorphism: Organize information by focusing on essentials, grouping similar things, and allowing flexibility.</li>
                </ul>
            </li>
        </ol>

        <hr>
        <h2>End of Chapter 8 notes</h2>
        <a href="#container">Back to top of page</a>

    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>
