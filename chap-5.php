<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chapter 5: Requirements Engineering</title>
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
        <h1>Chapter 5: Requirements Engineering</h1>

        <h2>What is Requirements Engineering?</h2>

        <p>In the past, people made things up as they went along when creating games. Now, we're smarter. We use a "requirements engineering" approach, which has three important parts:</p>

        <h3>A Framework:</h3>
        <p>It's like a step-by-step guide for making a game, helping us do things the right way every time.</p>

        <h3>Techniques:</h3>
        <p>Special skills used at different stages to design the game better.</p>

        <h3>Standards:</h3>
        <p>Rules that tell us what makes a good game, like the rules of a game-making club.</p>

        <p>Today, business analysts lead this process, but many people work together, like a big team creating the best video game.</p>

        <hr>

        <h2>A Framework for Requirements Engineering</h2>

        <h3>1. Introduction to the Framework: Building the Right Thing</h3>
        <p>Making a video game is like baking cookies. You need a plan to make it the best, just like a recipe for your favorite cookies.</p>

        <h3>2. The Recipe for Requirements Engineering:</h3>
        <ol>
            <li>Requirements Elicitation: First step, like gathering cookie ingredients, to figure out what makes the game amazing using various techniques.</li>
            <li>Requirements Analysis: After gathering "ingredients," check they're the best, meeting game standards. Add more if needed.</li>
            <li>Requirements Validation: Like tasting cookie dough, review and approve game requirements for the next step.</li>
        </ol>

        <h3>3. Helpful Ingredients:</h3>
        <ul>
            <li>Requirements Documentation: Write everything down, creating a recipe book for the game, using words and drawings to understand clearly.</li>
            <li>Requirements Management: Keep the game-making process in order, like an organized kitchen, tracking ideas and changes.</li>
        </ul>

        <p>So, this framework is a structured way to build a game correctly, helping us organize and control our work, just like following a recipe for perfect cookies every time!</p>

        <hr>

        <h2>Roles in Requirements Engineering</h2>

        <h3>Team Roles in Requirements Engineering: Building a Dream Team</h3>

        <ul>
            <li>Project Sponsor: The boss of the project, makes key decisions.</li>
            <li>Managers: Team leaders overseeing various aspects of the project.</li>
            <li>Users (Process Workers): Those who'll play the game, their input is vital.</li>
            <li>Domain Experts: Bring fresh perspectives and ideas.</li>
        </ul>

        <h3>Solution Development Team Roles:</h3>

        <ul>
            <li>Project Manager: Like a game producer, in charge of the whole project.</li>
            <li>Business Analysts: The detectives, gather and manage project information.</li>
            <li>Testers: Quality controllers, ensure the game works as it should.</li>
            <li>Developers: The game creators, bring requirements to life.</li>
        </ul>

        <h3>Other Key Players:</h3>

        <ul>
            <li>Regulators: Help understand and follow rules and laws.</li>
            <li>Quality Assurance/Project Office: Double-check and ensure high standards during validation.</li>
        </ul>

        <p>In a nutshell, like a game development team, the requirements engineering team is a mix of experts working together to ensure a fantastic outcome!</p>

        <hr>

        <h2>Understanding "Requirements Elicitation"</h2>

        <h3>Requirements Elicitation: Discovering What's Necessary</h3>

        <p>Idea: Creating a new video game but needing to know what to include for it to be awesome.</p>

        <p>"Elicitation" vs. "Gathering": It's more like being a detective, actively seeking clues about what's needed for the game, like uncovering hidden information.</p>

        <p>Challenges: "Tacit" knowledge, things people know but may not realize they know, such as knowing how to play a game without thinking.</p>

        <p>Detective Techniques:</p>

        <h4>Primarily Qualitative Techniques:</h4>

        <ol>
            <li>Interviews: One-on-one conversations to gather deep information.</li>
            <li>Workshops: Group brainstorming sessions to share ideas.</li>
            <li>Focus Groups: Special group discussions sharing views and opinions.</li>
            <li>Observation: Watching people perform tasks to understand how they do things.</li>
            <li>Shadowing: Following someone and taking notes on their actions.</li>
            <li>Scenarios: Asking "What if" questions to make people consider unusual situations.</li>
            <li>Prototyping: Creating a basic version of the game to get feedback, like a rough sketch before the final game.</li>
        </ol>

        <p>Result: Gathering all the needed details for making the game.</p>

        <p>Analogy: Like being a detective, asking questions, and observing to create the best video game possible.</p>

        <hr>

        <h2>Understanding "Quantitative Elicitation Techniques"</h2>

        <h3>Quantitative Elicitation Techniques: Getting Concrete Numbers</h3>

        <p>Idea: Like finding out how many players will love your game or how many levels to create.</p>

        <ol>
            <li>Questionnaires and Surveys: The Online Question Game</li>
            <p>Use: When you can't meet players in person, use questionnaires or online surveys to get answers to a set of questions.</p>
            <p>Tip: Make sure questions are easy to understand and the survey isn't too long or complicated.</p>

            <li>Document Analysis: The Detective's Toolkit</li>
            <p>Use: Like being a detective, you look at documents to understand what data is needed for your game.</p>
            <p>Questions: Ask about the document's purpose, users, and why it's used.</p>

            <li>Record Searching: Hunting for Clues</li>
            <p>Use: Find specific numbers by searching through records. Useful for tracking in-game actions.</p>

            <li>Special-Purpose Records: Time-Tracking</li>
            <p>Use: Ask players to record specific tasks, like creating a character or making purchases. Be cautious as people may forget or exaggerate.</p>

            <li>Activity Sampling: Observing and Recording</li>
            <p>Use: Observe players' actions to understand how they play the game. Similar to scientists observing animals in the wild.</p>
            <p>Note: People might not like being watched.</p>
        </ol>

        <p>Result: Gathering hard numbers to design the best gaming experience.</p>
        <p>Analogy: It's like being a game designer who uses data to create the best game!</p>

        <hr>

        <h2>Business Analysis Techniques</h2>

        <h3>Functional Requirements: What Your Solution Does</h3>
        <ul>
            <li>Describe what your solution should do.</li>
            <li>Like rules and mechanics in a game.</li>
            <li>Example: "Game must allow players to jump over obstacles."</li>
        </ul>

        <h3>Non-Functional Requirements: How Your Solution Performs</h3>
        <ul>
            <li>Focus on how your solution operates.</li>
            <li>Concerned with performance and quality.</li>
            <li>Example: "Game must load in under 5 seconds."</li>
        </ul>

        <h3>General Requirements: High-Level Business Rules</h3>
        <ul>
            <li>Overarching statements about your solution.</li>
            <li>Often related to business policies.</li>
            <li>Example: "Game must adhere to our company's code of conduct."</li>
        </ul>

        <h3>Technical Requirements: High-Level Technical Specifications</h3>
        <ul>
            <li>Define how your solution should be built.</li>
            <li>Include technology guidelines.</li>
            <li>Example: "Game must be developed using Unity game engine."</li>
        </ul>

        <h3>Business Requirements: Organization-Level Goals</h3>
        <ul>
            <li>Focus on high-level goals of the organization.</li>
            <li>Set big-picture objectives for your solution.</li>
        </ul>

        <h3>Stakeholder Requirements: Individual Needs</h3>
        <ul>
            <li>Address specific needs of people or groups involved in the project.</li>
            <li>More detailed than business requirements.</li>
        </ul>

        <h3>Solution Requirements: What the Solution Must Do</h3>
        <ul>
            <li>Detailed specifications for your solution.</li>
            <li>Include both functional and non-functional requirements.</li>
        </ul>

        <h3>Transition Requirements: Getting from Old to New</h3>
        <ul>
            <li>Describe steps to switch from old systems to the new solution.</li>
            <li>Temporary and no longer needed once new systems are in place.</li>
        </ul>

        <p>Being consistent and clear in documenting requirements is essential for your project. It ensures everyone knows what's expected, from big goals to small details.</p>

        <hr>

        <h2>Requirements Analysis</h2>

        <ol>
            <li>Categorized: Requirements are grouped by type (functional, non-functional, general, or technical) for easier management.</li>
            <li>Relevant: Requirements must align with the project's scope and objectives.</li>
            <li>Prioritized: Important requirements are addressed first to allocate resources effectively.</li>
            <li>Achievable: Requirements should be possible within technical and budget constraints.</li>
            <li>Clear and Unambiguous: Requirements must be easily understood, free of ambiguity.</li>
            <li>Testable: Written to allow for effective testing during the project.</li>
            <li>Problem, Not Solution: Describe what needs to be achieved, not how to achieve it.</li>
            <li>Consistent: Requirements shouldn't conflict with each other.</li>
            <li>Owned: Each requirement has a designated owner for relevance and content.</li>
            <li>Unique and Atomic: Singular requirements that address specific needs.</li>
            <li>Traceable: Easily traced back to their sources through development.</li>
            <li>Concise: Brief and to the point, enhancing understanding and review.</li>
            <li>Complete: Offers a comprehensive description without constant reference to other documents.</li>
            <li>Correct: Accurately reflects the organization's needs, being technically sound.</li>
            <li>Conformant: Follows organization standards for documenting requirements.</li>
        </ol>

        <p>Effective prioritization follows the MOSCOW scheme, considering importance and urgency. Communication and negotiation help achieve consensus, with the project sponsor often making the final call to establish priorities.</p>

        <hr>

        <h2>Requirements Validation</h2>

        <h3>Ensuring Correctness</h3>

        <ul>
            <li>Verification: Like checking if we followed rules and guidelines.</li>
            <li>Validation: Ensuring we captured what users need, a final check for completeness and correctness.</li>
        </ul>

        <h3>Requirements Document - A Comprehensive Guide</h3>

        <ul>
            <li>Requirements Catalogue: A list of requirements, each with an ID, title, and details.</li>
            <li>Glossary of Terms: Explains terminology to avoid confusion.</li>
            <li>Functional Models: Diagrams showing how the system works.</li>
            <li>Data Models: Illustrate data storage and usage.</li>
        </ul>

        <p>Each Requirement Includes:</p>

        <ul>
            <li>ID for organization.</li>
            <li>Title.</li>
            <li>Version and status.</li>
            <li>Origin and business area.</li>
            <li>An owner for approval.</li>
            <li>Stakeholders.</li>
            <li>Priority.</li>
            <li>Non-functional aspects.</li>
            <li>Acceptance criteria.</li>
            <li>Importance (e.g., legal or project-critical).</li>
            <li>Links to related documents.</li>
            <li>Cross-references.</li>
            <li>Outcome status (met or set aside).</li>
        </ul>

        <p>User Stories: Small, user-centric descriptions of what's wanted, often used in Agile projects.</p>

        <p>Ensuring that the right thing is built the right way.</p>

        <hr>

        <h2>Requirements Management</h2>

        <h3>Organizing Project Wishes and Rules</h3>

        <ul>
            <li>Configuration Management (Version Control)</li>
            <ul>
                <li>Tracks the latest version of project designs to prevent working on outdated versions.</li>
            </ul>
            <li>Change Control</li>
            <ul>
                <li>Records and evaluates new project ideas, considering their impact on cost, time, and size.</li>
            </ul>
            <li>Traceability</li>
            <ul>
                <li>Traces back to the project's origins and forward to what was created.</li>
                <li>Helps understand the reasons behind certain project decisions.</li>
            </ul>
            <li>For efficient management, special computer tools are used to organize and safeguard data for complex projects.</li>
            <li>Acts like a super organized LEGO project manager, ensuring that all ideas, changes, and project details are well-maintained and easily accessible.</li>
        </ul>

        <hr>

        <h2>Agile Development</h2>

        <h3>Regular Requirements Engineering:</h3>
        <ol>
            <li>Plan and Design: Thorough planning and design, specifying every detail of your treehouse.</li>
            <li>Create Detailed Plan: Develop a comprehensive plan with all the materials and elements required.</li>
        </ol>

        <h3>Agile Development:</h3>
        <ol>
            <li>Basic Idea: Start with a basic concept of the treehouse, not too detailed, but with a clear goal of making it cool.</li>
            <li>Build On-the-Fly: Progressively construct the treehouse, making decisions and improvements as you go, like adding a slide, rope ladder, and a secret trapdoor.</li>
            <li>Focus on Playability: Emphasize getting the treehouse standing and playable quickly. Don't over-plan, as you anticipate changes along the way.</li>
        </ol>

        <p>Agile Approach: In Agile, plans are flexible, and it's acceptable for them to evolve. It's adaptable, allowing decisions to be made during construction rather than extensive pre-planning.</p>

        <p>The Agile approach to requirements management involves being flexible and making decisions "just in time" as the project unfolds. It's about adapting and improving as you go, rather than defining every detail from the start.</p>

        <hr>

        <h2>Regular Requirements Engineering basis and for Off-The-Shelf Solutions:</h2>

        <ol>
            <li>Detailed Planning: When building something like a treehouse, you begin by deciding every detail, including its appearance and features.</li>
            <li>Creating Requirements List: This planning results in a comprehensive list of everything needed, such as wood, nails, and paint, which serves as your "requirements."</li>
        </ol>

        <p>Off-The-Shelf Solutions like Video Game Consoles:</p>

        <ol>
            <li>Pre-Made Choices: In the case of video game consoles, you select from existing options like PlayStation or Xbox, with no influence over their construction.</li>
            <li>User Requirements: Upon getting your chosen console, you have specific requirements for it, such as playing games, watching movies, and using it with friends.</li>
        </ol>

        <p>Importance of Matching Needs to Available Features:</p>

        <ul>
            <li>Fixed Features: With off-the-shelf solutions, you can't modify their construction; you have to work with what's available.</li>
            <li>Choose Wisely: When opting for such solutions, it's crucial to ensure they align with your requirements. For instance, if you want online gaming, confirm that the console supports it, but you can't change its physical appearance. The key is to find a balance between your needs and the available features.</li>
        </ul>
 
        <hr>
        <h2>End of Chapter 5 notes</h2>
        <a href="#container">Back to top of page</a>

    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>
