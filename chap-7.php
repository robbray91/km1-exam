<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chapter 7: System Modelling Techniques</title>
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
        <h2>Chapter 7: System Modelling Techniques</h2>
        <ol>
            <li>
                <h3>What is Modeling?</h3>
                <ul>
                    <li>Modeling is creating a detailed representation of something, like a system or object.</li>
                    <li>This chapter focuses on modeling in the context of business and IT systems.</li>
                </ul>
            </li>
            <li>
                <h3>Abstraction:</h3>
                <ul>
                    <li>Abstraction means simplifying a model by removing unnecessary details to focus on what's important.</li>
                    <li>The goal is to make useful models, even if they aren't perfect.</li>
                </ul>
            </li>
            <li>
                <h3>Different Forms of Abstraction:</h3>
                <ul>
                    <li>Logical modeling focuses on "what?", "when?", and "why?", excluding specific technology or people.</li>
                    <li>Other forms include specification, specialisation, realisation, and reification.</li>
                </ul>
            </li>
            <li>
                <h3>Structure over Words:</h3>
                <ul>
                    <li>Modeling uses diagrams and structured descriptions instead of just words.</li>
                    <li>Diagrams help visualize complex systems with elements like tasks, entities, and connections.</li>
                </ul>
            </li>
            <li>
                <h3>As-Is and To-Be Models:</h3>
                <ul>
                    <li>When creating or changing a system, make two models: one for the current system (As-Is) and one for the proposed system (To-Be).</li>
                    <li>Comparing these models helps identify differences and plan development.</li>
                </ul>
            </li>
            <li>
                <h3>Views and Viewpoints:</h3>
                <ul>
                    <li>Views represent a model, and viewpoints are templates for creating those views.</li>
                    <li>Different stakeholders may value different views of the same model.</li>
                </ul>
            </li>
            <li>
                <h3>U-Curve Process Pattern:</h3>
                <ul>
                    <li>The U-curve process involves steps like documenting the current system, abstracting physical details, considering business requirements, and specifying the proposed system.</li>
                    <li>This process aids in understanding and developing solutions, especially for existing systems and new technologies.</li>
                </ul>
            </li>
        </ol>

        <hr>

        <h2>Rationale for Modeling</h2>
        <ol>
            <li>
                <h3>Purpose of Modeling:</h3>
                <ul>
                    <li>Modeling is used in various fields for different purposes, such as architects showing 3D models, engineers using structural models, economists using dynamic models, and Formula One designers using scale models for testing.</li>
                </ul>
            </li>
            <li>
                <h3>What Modeling Facilitates:</h3>
                <ul>
                    <li>Modeling is a tool for developing high-quality solutions.</li>
                    <li>It supports communication, understanding, and experimentation.</li>
                    <li>Enables stakeholders to review and correct misunderstandings early in development.</li>
                </ul>
            </li>
            <li>
                <h3>Validation and Gap Analysis:</h3>
                <ul>
                    <li>Models help validate understanding and solutions before significant resources are invested.</li>
                    <li>The U-curve process and consistent views aid in gap analysis, identifying changes needed in the system.</li>
                </ul>
            </li>
            <li>
                <h3>Limitations of Modeling:</h3>
                <ul>
                    <li>"All models are wrong, but some are useful."</li>
                    <li>A rigid approach can be counterproductive.</li>
                    <li>Modeling alone won't ensure a high-quality solution but helps identify and address defects early.</li>
                </ul>
            </li>
            <li>
                <h3>Value of Modeling:</h3>
                <ul>
                    <li>"A picture is worth a thousand words."</li>
                    <li>Modeling, especially collaboratively, saves time and effort by identifying defects early.</li>
                    <li>The delivered model, with structured content and standardized visual syntax, is valuable for interpretation.</li>
                </ul>
            </li>
            <li>
                <h3>Automated Model Generation:</h3>
                <ul>
                    <li>Automated tools can generate models using processes like Model Driven Architecture (MDA) and Unified Modeling Language (UML).</li>
                    <li>Risks include neglecting stakeholder-relevant views necessary for analysis and validation.</li>
                </ul>
            </li>
        </ol>

        <hr>

        <h2>Multiple Models and Views</h2>
        <ol>
            <li>
                <h3>Designing a Video Game:</h3>
                <ul>
                    <li>Designing a video game involves planning how it works, the characters involved, and the events that occur.</li>
                </ul>
            </li>
            <li>
                <h3>Models as Blueprints:</h3>
                <ul>
                    <li>Models act like blueprints for the game, helping to understand and organize its functionality. Different plans are needed for various game aspects.</li>
                </ul>
            </li>
            <li>
                <h3>Quotation Wisdom:</h3>
                <ul>
                    <li>Smart people emphasize the need for multiple plans to cover different aspects of game development.</li>
                </ul>
            </li>
            <li>
                <h3>Three-View Approach Toolkit:</h3>
                <ul>
                    <li>Game designers use the Three-View Approach toolkit, focusing on Functionality, Static Data, and Events to understand the game's inner workings.</li>
                </ul>
            </li>
            <li>
                <h3>Answering Important Questions:</h3>
                <ul>
                    <li>The toolkit helps answer crucial questions about players, events, functionality, timing, and location, providing a comprehensive understanding of the game.</li>
                </ul>
            </li>
            <li>
                <h3>Cool Picture Alert - Figure 7.2:</h3>
                <ul>
                    <li>Figure 7.2 is a visual representation showing how the Three-View Approach fits together, acting as a map for game design.</li>
                </ul>
            </li>
        </ol>

        <hr>

        <h2>Pre-UML Modeling Techniques</h2>
        <ol>
            <li>
                <h3>Functionality - Making Things Happen:</h3>
                <ul>
                    <li>Diagrams for Processes:</li>
                    <ul>
                        <li>Data Flow Diagram (DFD): Maps processes like ordering books and managing stock with inputs and outputs.</li>
                        <li>Flow Chart: Visualizes task steps, possibly using swimlanes for organization.</li>
                        <li>Jackson Structure Chart: Structurally represents processes visually.</li>
                    </ul>
                </ul>
            </li>
            <li>
                <h3>Example - Data Flow Diagram (DFD):</h3>
                <ul>
                    <li>Figure 7.3: Shows processes like maintaining a catalog and processing orders, illustrating interactions with users, systems, and data stores.</li>
                </ul>
            </li>
            <li>
                <h3>Static Data - Organizing Stuff:</h3>
                <ul>
                    <li>Diagrams for Information Organization:</li>
                    <ul>
                        <li>Entity Relationship Diagram (ERD): Visualizes relationships between different information types (books, customers, orders).</li>
                        <li>Hierarchical Tree Diagram: Organizes data in a hierarchy, similar to a family tree.</li>
                        <li>Bubble Diagram: Illustrates relationships between different pieces of information.</li>
                    </ul>
                </ul>
            </li>
            <li>
                <h3>Example - Entity Relationship Diagram (ERD):</h3>
                <ul>
                    <li>Figure 7.4: Acts as a "family tree" for BookStack Mountain Ltd., depicting connections between customers, orders, and stock requests.</li>
                </ul>
            </li>
            <li>
                <h3>Building BookStack Mountain Ltd.:</h3>
                <ul>
                    <li>Consideration of Information Organization:</li>
                    <ul>
                        <li>In creating the bookstore, it's crucial not only to plan processes but also to organize information effectively.</li>
                        <li>Diagrams serve as blueprints for BookStack Mountain Ltd., ensuring it becomes the coolest bookstore in town!</li>
                    </ul>
                </ul>
            </li>
        </ol>

        <hr>

        <h2>The Unified Modeling Language</h2>
        <ol>
            <li>
                <h3>What's UML?</h3>
                <ul>
                    <li>Definition: Unified Modeling Language (UML) is a language for creating visual diagrams that illustrate how systems work.</li>
                    <li>Usage: Established in 1997, it's widely used for visual planning, especially in complex systems involving objects, components, and events.</li>
                </ul>
            </li>
            <li>
                <h3>Different Views with UML:</h3>
                <ul>
                    <li>Types: UML offers 13 diagram types, categorized into 'Structural' (how things are built) and 'Behavioral' (how things work).</li>
                    <li>Analogy: Think of these diagrams as lenses to view a system.</li>
                </ul>
            </li>
            <li>
                <h3>Examples of UML Diagrams:</h3>
                <ul>
                    <li>Use Case Diagram (Functional): Maps the system's capabilities (Figure 7.7).</li>
                    <li>Activity Diagram (Behavioral): Flowchart illustrating task steps (Figure 7.8).</li>
                    <li>Sequence Diagram (Behavioral): Shows system interactions over time (Figure 7.9).</li>
                    <li>Class Diagram (Static Data): Family tree depicting information relationships (Figure 7.10).</li>
                    <li>State Machine (Events): Visual guide for understanding changes over time (Figure 7.11).</li>
                </ul>
            </li>
            <li>
                <h3>Using UML for Different Purposes:</h3>
                <ul>
                    <li>Static Data Modeling: Achieved with class diagrams (Figure 7.10).</li>
                    <li>Event Modeling: Done using state machines (Figure 7.11).</li>
                </ul>
            </li>
            <li>
                <h3>UML for Everyone:</h3>
                <ul>
                    <li>Accessibility: UML is not only for coding; it aids in understanding and planning complex systems for everyone.</li>
                </ul>
            </li>
            <li>
                <h3>David C. Hay's Guide:</h3>
                <ul>
                    <li>Resource: For those interested in data modeling, David C. Hay's book offers valuable tips.</li>
                </ul>
            </li>
            <li>
                <h3>In a Nutshell:</h3>
                <ul>
                    <li>Analogy: UML is like a superhero language enabling the creation of diagrams to plan and understand systems.</li>
                    <li>Encouragement: Ready to draw your system's superhero diagrams?</li>
                </ul>
            </li>
        </ol>

        <hr>

        <h2>Abstraction, Leveling and Scope</h2>

        <ol>
            <li>
                <h3>Classification:</h3>
                <ul>
                    <li>Idea: Imagine your favorite game category, like types of books.</li>
                    <li>Explanation: Classification is grouping things with shared features, called classes or entities in modeling.</li>
                </ul>
            </li>
            <li>
                <h3>Generalization:</h3>
                <ul>
                    <li>Idea: Think about different book formats.</li>
                    <li>Explanation: Generalization groups similar things with shared base info but different behaviors.</li>
                </ul>
            </li>
            <li>
                <h3>Composition:</h3>
                <ul>
                    <li>Idea: Picture a book made of chapters.</li>
                    <li>Explanation: Composition builds something complex by combining simpler parts, like a LEGO set.</li>
                </ul>
            </li>
            <li>
                <h3>Idealization:</h3>
                <ul>
                    <li>Idea: Creating different versions of a story.</li>
                    <li>Explanation: Idealization starts with a rough idea, refines the structure, and considers details like cover design and font.</li>
                </ul>
            </li>
            <li>
                <h3>Different Levels of Idealization:</h3>
                <ul>
                    <li>Contextual Model: Outlines what something is about.</li>
                    <li>Conceptual Model: Describes in detail, like a business process or data structure.</li>
                    <li>Logical Model: A refined, structured version without implementation details.</li>
                    <li>Physical Model: Technical, considering specific technologies or locations.</li>
                </ul>
            </li>
            <li>
                <h3>In a Nutshell:</h3>
                <ul>
                    <li>Analogy: Abstraction Explained: Like looking at things from different angles – grouping, organizing, building from simple parts, and creating versions of the same idea.</li>
                    <li>Analogy: It's like telling a story, from a rough concept to the final detailed book.</li>
                </ul>
            </li>
        </ol>

        <hr>

        <h2>Opacity of Model Elements</h2>

        <ol>
            <li>
                <h3>Black-Box Elements:</h3>
                <ul>
                    <li>Idea: Think of a magic box with amazing abilities.</li>
                    <li>Explanation: In modeling, it's a black-box, focusing on what a system does as a whole, not its internal workings.</li>
                </ul>
            </li>
            <li>
                <h3>Context Diagram:</h3>
                <ul>
                    <li>Idea: Picture a map of a game world without details inside buildings.</li>
                    <li>Explanation: Context diagram is a black-box view, showing how a system interacts without delving into specifics.</li>
                </ul>
            </li>
            <li>
                <h3>System Use Case Diagram:</h3>
                <ul>
                    <li>Idea: Like telling a friend about a game without diving into code details.</li>
                    <li>Explanation: System use case diagram shows what a system can do for users without getting into technicalities.</li>
                </ul>
            </li>
            <li>
                <h3>Black-Box Testing:</h3>
                <ul>
                    <li>Idea: Testing a gadget's functionality without opening it.</li>
                    <li>Explanation: Black-box testing checks if a system works based on specifications, ignoring internal details.</li>
                </ul>
            </li>
            <li>
                <h3>White-Box Views:</h3>
                <ul>
                    <li>Idea: Engineers understanding how circuits work inside a gadget.</li>
                    <li>Explanation: White-box view delves into a system's internals, useful for developers and testers.</li>
                </ul>
            </li>
            <li>
                <h3>Service-Oriented Analysis:</h3>
                <ul>
                    <li>Idea: Treating a service like a magical spell without worrying about the wizard's techniques.</li>
                    <li>Explanation: In system analysis, a service is a logical, black-box view, defining what it does, not how.</li>
                </ul>
            </li>
            <li>
                <h3>In a Nutshell:</h3>
                <ul>
                    <li>Analogy: Opacity in models is like magic behind the scenes in a show. Balancing mystery (black-box) and understanding (white-box) makes systems powerful and understandable.</li>
                </ul>
            </li>
        </ol>

        <hr>

        <h2>Levels of Models and Model Elements</h2>

        <ol>
            <li>
                <h3>Business Process Levels:</h3>
                <ul>
                    <li>Idea: Organization as a grand adventure with big quests.</li>
                    <li>Explanation: Business Process Modeling starts high-level and drills down to detailed tasks, like quests in an adventure.</li>
                </ul>
            </li>
            <li>
                <h3>Functional Decomposition:</h3>
                <ul>
                    <li>Idea: IT systems as a puzzle with functional pieces.</li>
                    <li>Explanation: Break down the puzzle into functional parts, using flow charts or Jackson structures for intricate details.</li>
                </ul>
            </li>
            <li>
                <h3>Cockburn Use Case Levels:</h3>
                <ul>
                    <li>Idea: Use cases as a blueprint with different zoom levels.</li>
                    <li>Explanation: Alistair Cockburn's map offers Design Scope and Goal Level, letting you focus on big pictures or intricate details in system-user interactions.</li>
                </ul>
            </li>
            <li>
                <h3>Functional Model Map (FMM):</h3>
                <ul>
                    <li>Idea: Treasure map guiding from high-level objectives to system design gems.</li>
                    <li>Explanation: FMM is a roadmap, suggesting models for each level, ensuring a smooth journey from business requirements to technical design.</li>
                </ul>
            </li>
            <li>
                <h3>System Use Cases – Bridging the Gap:</h3>
                <ul>
                    <li>Idea: System Use Cases as magical bridges between business and developers.</li>
                    <li>Explanation: They translate between business and IT language, ensuring understanding and meeting requirements.</li>
                </ul>
            </li>
            <li>
                <h3>Unveiling the Levels:</h3>
                <ul>
                    <li>Idea: Traversing levels, each holding its secrets.</li>
                    <li>Explanation: Functional Model Map guides, revealing tools and models for each level, like exploring a mysterious tower.</li>
                </ul>
            </li>
        </ol>

        <hr>

        <h2>Cross-Referencing Models, Facets, Perspectives and Traceability</h2>

        <ol>
            <li>
                <h3>The Detective's Toolbox:</h3>
                <ul>
                    <li>Idea: Models need to work together seamlessly.</li>
                    <li>Explanation: Detective toolbox includes traceability, cross-referencing, and consistency checks.</li>
                </ul>
            </li>
            <li>
                <h3>The Map of Dependencies:</h3>
                <ul>
                    <li>Idea: Matrices as treasure maps revealing dependencies.</li>
                    <li>Explanation: Maps link elements like business requirements to system use cases, guiding through model landscapes.</li>
                </ul>
            </li>
            <li>
                <h3>CRUD Matrix:</h3>
                <ul>
                    <li>Idea: CRUD matrix for understanding function-data interactions.</li>
                    <li>Explanation: Matrix reveals if entities are created, read, updated, or deleted, showing the dynamic relationship.</li>
                </ul>
            </li>
            <li>
                <h3>Traceability Paths:</h3>
                <ul>
                    <li>Idea: Paths guiding from business to technical design.</li>
                    <li>Explanation: Paths reveal relationships between models, ensuring a coherent journey through different levels.</li>
                </ul>
            </li>
            <li>
                <h3>Combining Paths for Clarity:</h3>
                <ul>
                    <li>Idea: Landscape with vertical and horizontal paths.</li>
                    <li>Explanation: Overlay paths on a functional model map for a comprehensive guide from requirements to code.</li>
                </ul>
            </li>
            <li>
                <h3>Detective's Insights:</h3>
                <ul>
                    <li>Idea: Seasoned detective noticing gaps in use case models.</li>
                    <li>Explanation: Sharp eye ensures completeness in storytelling, identifying missing scenarios for a thorough model.</li>
                </ul>
            </li>
        </ol>

        <hr>

        <h2>Documentation and Specification with Models</h2>

        <ol>
            <li>
                <h3>Waterfall Chronicles:</h3>
                <ul>
                    <li>Idea: Waterfall lifecycle creates documents at each stage.</li>
                    <li>Explanation: Each document is a chapter in the epic saga of development.</li>
                </ul>
            </li>
            <li>
                <h3>Agile Enigma:</h3>
                <ul>
                    <li>Idea: Agile challenges traditional scrolls but includes documentation.</li>
                    <li>Explanation: Business case, testing, and manuals play roles in Agile, rejecting overwhelming papers.</li>
                </ul>
            </li>
            <li>
                <h3>Agile Manifesto Scrolls:</h3>
                <ul>
                    <li>Idea: Agile Manifesto values working software over comprehensive documentation.</li>
                    <li>Explanation: User stories on cards or sticky notes capture requirements with agility.</li>
                </ul>
            </li>
            <li>
                <h3>Incremental Sagas:</h3>
                <ul>
                    <li>Idea: Incremental approaches balance upfront requirements with incremental deliveries.</li>
                    <li>Explanation: Documentation evolves with detailed analysis, design, and rhythmic deliveries.</li>
                </ul>
            </li>
            <li>
                <h3>Unified Process Chronicles:</h3>
                <ul>
                    <li>Idea: Unified Process unfolds architecture views gradually.</li>
                    <li>Explanation: Logical, implementation, and process views fill the canvas, Use Case view slices the system.</li>
                </ul>
            </li>
            <li>
                <h3>Face-to-Face Chronicles:</h3>
                <ul>
                    <li>Idea: Agile values face-to-face conversation and modeling on whiteboards.</li>
                    <li>Explanation: Models are snapshots of dialogues, treasures for future quests.</li>
                </ul>
            </li>
            <li>
                <h3>Detective's Toolkit:</h3>
                <ul>
                    <li>Idea: Detective toolkit includes matrices, CRUD matrices, and traceability paths.</li>
                    <li>Explanation: Matrices map dependencies, CRUD matrices show function-data dance, traceability paths ensure coherence.</li>
                </ul>
            </li>
            <li>
                <h3>Tales of Completeness:</h3>
                <ul>
                    <li>Idea: Detective notices gaps in use case model, quest for completeness continues.</li>
                    <li>Explanation: Recognizes missing scenarios, ensuring a complete story.</li>
                </ul>
            </li>
        </ol>

        <hr>

        <h2>In Conclusion</h2>

        <p>Summary: Each documentation style weaves a unique pattern, breathing life into the software realm. Armed with your documentation sword, venture into development landscapes!</p>

        <hr>
        <h2>End of Chapter 7 notes</h2>
        <a href="#container">Back to top of page</a>

    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>
