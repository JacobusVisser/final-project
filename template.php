<!-- Jacobus Visser -->


<body>
    <?php include("header.html"); ?>
    	<nav>
		<div id="backdrop">
            <button class="accordion" id="item_1">Referencing CSS &#9660;</button>
            <ol class="panel" id="list_1">
                <li> <a href="#section1_subsection1">subsection 1</a> </li>
                <li> <a href="#section1_subsection2">subsection 2</a> </li>
            </ol>

            <button class="accordion" id="item_2">Exercise #1: Apply An Alternate Stylesheet &#9660;</button>
            <ol class="panel" id="list_2">
                <li> <a href="#section2_subsection1">subsection 1</a> </li>
                <li> <a href="#section2_subsection2">subsection 2</a> </li>
            </ol>

            <button class="accordion" id="item_3">@import Method: Managing Multiple CSS Files &#9660;<span class="glyphicon glyphicon-chevron-down"></span></button>
            <ol class="panel" id="list_3">
                <li> <a href="#section3_subsection1">subsection 1</a> </li>
                <li> <a href="#section3_subsection2">subsection 2</a> </li>
            </ol>
            <button class="accordion" id="item_4">Exercise #2: Using @import &#9660;</button>
            <ol class="panel" id="list_4">
                <li> <a href="#section4_subsection1">subsection 1</a> </li>
                <li> <a href="#section4_subsection2">subsection 2</a> </li>
            </ol>
            <button class="accordion" id="item_5">Simplifying your CSS &#9660;</button>
            <ol class="panel" id="list_5">
                <li> <a href="#section5_subsection1">subsection 1</a> </li>
                <li> <a href="#section5_subsection2">subsection 2</a> </li>
            </ol>
            <button class="accordion" id="item_6">Exercise #3: Advanced Selectors &#9660;</button>
            <ol class="panel" id="list_6">
                <li> <a href="#section6_subsection1">subsection 1</a> </li>
                <li> <a href="#section6_subsection2">subsection 2</a> </li>
            </ol>
            <button class="accordion"><a id="homework_button" href="#homework_section">Homework</a></button>
        </div>
	</nav>
    <main>
        <h1 id="lecture_title">Lecture 3: CSS Techniques</h1>
        <div class="section">
        <h2>Referencing CSS</h2>
            <h3 id="section1_subsection1">subsection 1</h3>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum eget eros nisi. Donec mattis lobortis luctus. Proin porta erat ac ligula dignissim, vehicula congue ex egestas. Vestibulum imperdiet ligula a eros placerat, sed imperdiet odio volutpat. Cras diam lectus, egestas in nulla non, sollicitudin ullamcorper ligula. Proin nec pharetra enim, in euismod justo. Nunc interdum nunc eu pretium consectetur. Nunc sagittis vestibulum ipsum, ut blandit mi euismod sit amet. Sed ultricies justo a mollis vestibulum. Aenean nec orci ultrices, vehicula leo eu, suscipit ex. Maecenas eu feugiat ante. Aliquam ultricies justo non arcu finibus efficitur. Aenean mauris risus, aliquet convallis lacus eu, convallis auctor ligula.</p>
            <h3 id="section1_subsection2">subsection 2</h3>
        <ul><li>
        Sed sit amet dolor condimentum, scelerisque mauris in, dignissim tellus. Duis quis lacus in orci bibendum semper sit amet eu velit. Nunc volutpat in tellus sagittis venenatis. Phasellus sit amet leo ligula. Etiam aliquam felis quis odio rutrum, et hendrerit massa tempor. Pellentesque ut bibendum tellus. Duis facilisis risus vel ipsum vulputate, sed ornare sem varius.</li>

        <li>Quisque vel ipsum lorem. Mauris egestas nibh at viverra suscipit. Aliquam auctor justo et finibus sodales. Aenean tempus mollis tincidunt. Integer porttitor dictum diam quis condimentum. Praesent mattis interdum nisi sit amet faucibus. Aliquam pellentesque porta sapien ullamcorper posuere. Donec scelerisque posuere odio, sed pellentesque sem dignissim nec. Duis consequat pulvinar est vitae maximus. Praesent vulputate orci quis tincidunt tincidunt. Nunc vestibulum ipsum pellentesque maximus auctor. Ut tristique massa arcu, vitae ornare enim ullamcorper vitae.</li>

        <li>Maecenas tincidunt arcu laoreet purus imperdiet ultrices. Cras dapibus libero justo, eu porta nisi tempus ut. Phasellus nec tortor ultrices, euismod velit nec, facilisis tellus. Quisque consequat eros a ullamcorper dignissim. Donec facilisis auctor facilisis. Praesent ultrices orci vel lorem consectetur, non dignissim eros viverra. Morbi ligula velit, placerat a metus at, convallis cursus arcu. Maecenas id euismod ipsum. In id arcu ac justo aliquam porttitor ut quis diam. Fusce pulvinar metus elit, vel rhoncus justo porttitor quis. Nulla mattis rutrum fermentum. Vivamus at facilisis purus, sed tristique ipsum. Praesent luctus dui ut dolor hendrerit, sit amet imperdiet sem facilisis. Aliquam non turpis sem. Proin ac neque in dui consequat dictum.</li>

        <li>Ut consectetur elit vel quam aliquam facilisis. Pellentesque id mauris at metus mattis posuere. Nam mattis erat eu leo pharetra, et egestas mauris commodo. Duis mi mauris, cursus et odio varius, gravida sodales odio. Etiam non elementum nulla. Nulla consequat mi sed lectus egestas, eu luctus diam tempus. Aliquam auctor tellus arcu, vel porttitor orci gravida sit amet. Quisque facilisis volutpat venenatis. Aliquam a turpis a ex venenatis facilisis. Nunc quis ante convallis, posuere nisl ac, fringilla nibh. Donec in libero ut ligula consequat rhoncus id a nisl.</li></ul>
        </div>
        <div class="section">
        <h2>Exercise #1: Apply An Alternate Stylesheet</h2>
            <h3 id="section2_subsection1">subsection 1</h3>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum eget eros nisi. Donec mattis lobortis luctus. Proin porta erat ac ligula dignissim, vehicula congue ex egestas. Vestibulum imperdiet ligula a eros placerat, sed imperdiet odio volutpat. Cras diam lectus, egestas in nulla non, sollicitudin ullamcorper ligula. Proin nec pharetra enim, in euismod justo. Nunc interdum nunc eu pretium consectetur. Nunc sagittis vestibulum ipsum, ut blandit mi euismod sit amet. Sed ultricies justo a mollis vestibulum. Aenean nec orci ultrices, vehicula leo eu, suscipit ex. Maecenas eu feugiat ante. Aliquam ultricies justo non arcu finibus efficitur. Aenean mauris risus, aliquet convallis lacus eu, convallis auctor ligula.</p>
            <h3 id="section2_subsection2">subsection 2</h3>
        <ul><li>
        Sed sit amet dolor condimentum, scelerisque mauris in, dignissim tellus. Duis quis lacus in orci bibendum semper sit amet eu velit. Nunc volutpat in tellus sagittis venenatis. Phasellus sit amet leo ligula. Etiam aliquam felis quis odio rutrum, et hendrerit massa tempor. Pellentesque ut bibendum tellus. Duis facilisis risus vel ipsum vulputate, sed ornare sem varius.</li>

        <li>Quisque vel ipsum lorem. Mauris egestas nibh at viverra suscipit. Aliquam auctor justo et finibus sodales. Aenean tempus mollis tincidunt. Integer porttitor dictum diam quis condimentum. Praesent mattis interdum nisi sit amet faucibus. Aliquam pellentesque porta sapien ullamcorper posuere. Donec scelerisque posuere odio, sed pellentesque sem dignissim nec. Duis consequat pulvinar est vitae maximus. Praesent vulputate orci quis tincidunt tincidunt. Nunc vestibulum ipsum pellentesque maximus auctor. Ut tristique massa arcu, vitae ornare enim ullamcorper vitae.</li>

        <li>Maecenas tincidunt arcu laoreet purus imperdiet ultrices. Cras dapibus libero justo, eu porta nisi tempus ut. Phasellus nec tortor ultrices, euismod velit nec, facilisis tellus. Quisque consequat eros a ullamcorper dignissim. Donec facilisis auctor facilisis. Praesent ultrices orci vel lorem consectetur, non dignissim eros viverra. Morbi ligula velit, placerat a metus at, convallis cursus arcu. Maecenas id euismod ipsum. In id arcu ac justo aliquam porttitor ut quis diam. Fusce pulvinar metus elit, vel rhoncus justo porttitor quis. Nulla mattis rutrum fermentum. Vivamus at facilisis purus, sed tristique ipsum. Praesent luctus dui ut dolor hendrerit, sit amet imperdiet sem facilisis. Aliquam non turpis sem. Proin ac neque in dui consequat dictum.</li>

        <li>Ut consectetur elit vel quam aliquam facilisis. Pellentesque id mauris at metus mattis posuere. Nam mattis erat eu leo pharetra, et egestas mauris commodo. Duis mi mauris, cursus et odio varius, gravida sodales odio. Etiam non elementum nulla. Nulla consequat mi sed lectus egestas, eu luctus diam tempus. Aliquam auctor tellus arcu, vel porttitor orci gravida sit amet. Quisque facilisis volutpat venenatis. Aliquam a turpis a ex venenatis facilisis. Nunc quis ante convallis, posuere nisl ac, fringilla nibh. Donec in libero ut ligula consequat rhoncus id a nisl.</li></ul>
        </div>
        <div class="section">
        <h2>@import Method: Managing Multiple CSS Files</h2>
            <h3 id="section3_subsection1">subsection 1</h3>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum eget eros nisi. Donec mattis lobortis luctus. Proin porta erat ac ligula dignissim, vehicula congue ex egestas. Vestibulum imperdiet ligula a eros placerat, sed imperdiet odio volutpat. Cras diam lectus, egestas in nulla non, sollicitudin ullamcorper ligula. Proin nec pharetra enim, in euismod justo. Nunc interdum nunc eu pretium consectetur. Nunc sagittis vestibulum ipsum, ut blandit mi euismod sit amet. Sed ultricies justo a mollis vestibulum. Aenean nec orci ultrices, vehicula leo eu, suscipit ex. Maecenas eu feugiat ante. Aliquam ultricies justo non arcu finibus efficitur. Aenean mauris risus, aliquet convallis lacus eu, convallis auctor ligula.</p>
            <h3 id="section3_subsection2">subsection 2</h3>
        <ul><li>
        Sed sit amet dolor condimentum, scelerisque mauris in, dignissim tellus. Duis quis lacus in orci bibendum semper sit amet eu velit. Nunc volutpat in tellus sagittis venenatis. Phasellus sit amet leo ligula. Etiam aliquam felis quis odio rutrum, et hendrerit massa tempor. Pellentesque ut bibendum tellus. Duis facilisis risus vel ipsum vulputate, sed ornare sem varius.</li>

        <li>Quisque vel ipsum lorem. Mauris egestas nibh at viverra suscipit. Aliquam auctor justo et finibus sodales. Aenean tempus mollis tincidunt. Integer porttitor dictum diam quis condimentum. Praesent mattis interdum nisi sit amet faucibus. Aliquam pellentesque porta sapien ullamcorper posuere. Donec scelerisque posuere odio, sed pellentesque sem dignissim nec. Duis consequat pulvinar est vitae maximus. Praesent vulputate orci quis tincidunt tincidunt. Nunc vestibulum ipsum pellentesque maximus auctor. Ut tristique massa arcu, vitae ornare enim ullamcorper vitae.</li>

        <li>Maecenas tincidunt arcu laoreet purus imperdiet ultrices. Cras dapibus libero justo, eu porta nisi tempus ut. Phasellus nec tortor ultrices, euismod velit nec, facilisis tellus. Quisque consequat eros a ullamcorper dignissim. Donec facilisis auctor facilisis. Praesent ultrices orci vel lorem consectetur, non dignissim eros viverra. Morbi ligula velit, placerat a metus at, convallis cursus arcu. Maecenas id euismod ipsum. In id arcu ac justo aliquam porttitor ut quis diam. Fusce pulvinar metus elit, vel rhoncus justo porttitor quis. Nulla mattis rutrum fermentum. Vivamus at facilisis purus, sed tristique ipsum. Praesent luctus dui ut dolor hendrerit, sit amet imperdiet sem facilisis. Aliquam non turpis sem. Proin ac neque in dui consequat dictum.</li>

        <li>Ut consectetur elit vel quam aliquam facilisis. Pellentesque id mauris at metus mattis posuere. Nam mattis erat eu leo pharetra, et egestas mauris commodo. Duis mi mauris, cursus et odio varius, gravida sodales odio. Etiam non elementum nulla. Nulla consequat mi sed lectus egestas, eu luctus diam tempus. Aliquam auctor tellus arcu, vel porttitor orci gravida sit amet. Quisque facilisis volutpat venenatis. Aliquam a turpis a ex venenatis facilisis. Nunc quis ante convallis, posuere nisl ac, fringilla nibh. Donec in libero ut ligula consequat rhoncus id a nisl.</li></ul>
        </div>
        <div class="section">
        <h2>Exercise #2: Using @import</h2>
            <h3 id="section4_subsection1">subsection 1</h3>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum eget eros nisi. Donec mattis lobortis luctus. Proin porta erat ac ligula dignissim, vehicula congue ex egestas. Vestibulum imperdiet ligula a eros placerat, sed imperdiet odio volutpat. Cras diam lectus, egestas in nulla non, sollicitudin ullamcorper ligula. Proin nec pharetra enim, in euismod justo. Nunc interdum nunc eu pretium consectetur. Nunc sagittis vestibulum ipsum, ut blandit mi euismod sit amet. Sed ultricies justo a mollis vestibulum. Aenean nec orci ultrices, vehicula leo eu, suscipit ex. Maecenas eu feugiat ante. Aliquam ultricies justo non arcu finibus efficitur. Aenean mauris risus, aliquet convallis lacus eu, convallis auctor ligula.</p>
            <h3 id="section4_subsection2">subsection 2</h3>
        <ul><li>
        Sed sit amet dolor condimentum, scelerisque mauris in, dignissim tellus. Duis quis lacus in orci bibendum semper sit amet eu velit. Nunc volutpat in tellus sagittis venenatis. Phasellus sit amet leo ligula. Etiam aliquam felis quis odio rutrum, et hendrerit massa tempor. Pellentesque ut bibendum tellus. Duis facilisis risus vel ipsum vulputate, sed ornare sem varius.</li>

        <li>Quisque vel ipsum lorem. Mauris egestas nibh at viverra suscipit. Aliquam auctor justo et finibus sodales. Aenean tempus mollis tincidunt. Integer porttitor dictum diam quis condimentum. Praesent mattis interdum nisi sit amet faucibus. Aliquam pellentesque porta sapien ullamcorper posuere. Donec scelerisque posuere odio, sed pellentesque sem dignissim nec. Duis consequat pulvinar est vitae maximus. Praesent vulputate orci quis tincidunt tincidunt. Nunc vestibulum ipsum pellentesque maximus auctor. Ut tristique massa arcu, vitae ornare enim ullamcorper vitae.</li>

        <li>Maecenas tincidunt arcu laoreet purus imperdiet ultrices. Cras dapibus libero justo, eu porta nisi tempus ut. Phasellus nec tortor ultrices, euismod velit nec, facilisis tellus. Quisque consequat eros a ullamcorper dignissim. Donec facilisis auctor facilisis. Praesent ultrices orci vel lorem consectetur, non dignissim eros viverra. Morbi ligula velit, placerat a metus at, convallis cursus arcu. Maecenas id euismod ipsum. In id arcu ac justo aliquam porttitor ut quis diam. Fusce pulvinar metus elit, vel rhoncus justo porttitor quis. Nulla mattis rutrum fermentum. Vivamus at facilisis purus, sed tristique ipsum. Praesent luctus dui ut dolor hendrerit, sit amet imperdiet sem facilisis. Aliquam non turpis sem. Proin ac neque in dui consequat dictum.</li>

        <li>Ut consectetur elit vel quam aliquam facilisis. Pellentesque id mauris at metus mattis posuere. Nam mattis erat eu leo pharetra, et egestas mauris commodo. Duis mi mauris, cursus et odio varius, gravida sodales odio. Etiam non elementum nulla. Nulla consequat mi sed lectus egestas, eu luctus diam tempus. Aliquam auctor tellus arcu, vel porttitor orci gravida sit amet. Quisque facilisis volutpat venenatis. Aliquam a turpis a ex venenatis facilisis. Nunc quis ante convallis, posuere nisl ac, fringilla nibh. Donec in libero ut ligula consequat rhoncus id a nisl.</li></ul>
        </div>
        <div class="section">
        <h2>Simplifying your CSS</h2>
            <h3 id="section5_subsection1">subsection 1</h3>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum eget eros nisi. Donec mattis lobortis luctus. Proin porta erat ac ligula dignissim, vehicula congue ex egestas. Vestibulum imperdiet ligula a eros placerat, sed imperdiet odio volutpat. Cras diam lectus, egestas in nulla non, sollicitudin ullamcorper ligula. Proin nec pharetra enim, in euismod justo. Nunc interdum nunc eu pretium consectetur. Nunc sagittis vestibulum ipsum, ut blandit mi euismod sit amet. Sed ultricies justo a mollis vestibulum. Aenean nec orci ultrices, vehicula leo eu, suscipit ex. Maecenas eu feugiat ante. Aliquam ultricies justo non arcu finibus efficitur. Aenean mauris risus, aliquet convallis lacus eu, convallis auctor ligula.</p>
            <h3 id="section5_subsection2">subsection 2</h3>
        <ul><li>
        Sed sit amet dolor condimentum, scelerisque mauris in, dignissim tellus. Duis quis lacus in orci bibendum semper sit amet eu velit. Nunc volutpat in tellus sagittis venenatis. Phasellus sit amet leo ligula. Etiam aliquam felis quis odio rutrum, et hendrerit massa tempor. Pellentesque ut bibendum tellus. Duis facilisis risus vel ipsum vulputate, sed ornare sem varius.</li>

        <li>Quisque vel ipsum lorem. Mauris egestas nibh at viverra suscipit. Aliquam auctor justo et finibus sodales. Aenean tempus mollis tincidunt. Integer porttitor dictum diam quis condimentum. Praesent mattis interdum nisi sit amet faucibus. Aliquam pellentesque porta sapien ullamcorper posuere. Donec scelerisque posuere odio, sed pellentesque sem dignissim nec. Duis consequat pulvinar est vitae maximus. Praesent vulputate orci quis tincidunt tincidunt. Nunc vestibulum ipsum pellentesque maximus auctor. Ut tristique massa arcu, vitae ornare enim ullamcorper vitae.</li>

        <li>Maecenas tincidunt arcu laoreet purus imperdiet ultrices. Cras dapibus libero justo, eu porta nisi tempus ut. Phasellus nec tortor ultrices, euismod velit nec, facilisis tellus. Quisque consequat eros a ullamcorper dignissim. Donec facilisis auctor facilisis. Praesent ultrices orci vel lorem consectetur, non dignissim eros viverra. Morbi ligula velit, placerat a metus at, convallis cursus arcu. Maecenas id euismod ipsum. In id arcu ac justo aliquam porttitor ut quis diam. Fusce pulvinar metus elit, vel rhoncus justo porttitor quis. Nulla mattis rutrum fermentum. Vivamus at facilisis purus, sed tristique ipsum. Praesent luctus dui ut dolor hendrerit, sit amet imperdiet sem facilisis. Aliquam non turpis sem. Proin ac neque in dui consequat dictum.</li>

        <li>Ut consectetur elit vel quam aliquam facilisis. Pellentesque id mauris at metus mattis posuere. Nam mattis erat eu leo pharetra, et egestas mauris commodo. Duis mi mauris, cursus et odio varius, gravida sodales odio. Etiam non elementum nulla. Nulla consequat mi sed lectus egestas, eu luctus diam tempus. Aliquam auctor tellus arcu, vel porttitor orci gravida sit amet. Quisque facilisis volutpat venenatis. Aliquam a turpis a ex venenatis facilisis. Nunc quis ante convallis, posuere nisl ac, fringilla nibh. Donec in libero ut ligula consequat rhoncus id a nisl.</li></ul>
        </div>
        <div class="section">
        <h2>Exercise #3: Advanced Selectors</h2>
            <h3 id="section6_subsection1">subsection 1</h3>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum eget eros nisi. Donec mattis lobortis luctus. Proin porta erat ac ligula dignissim, vehicula congue ex egestas. Vestibulum imperdiet ligula a eros placerat, sed imperdiet odio volutpat. Cras diam lectus, egestas in nulla non, sollicitudin ullamcorper ligula. Proin nec pharetra enim, in euismod justo. Nunc interdum nunc eu pretium consectetur. Nunc sagittis vestibulum ipsum, ut blandit mi euismod sit amet. Sed ultricies justo a mollis vestibulum. Aenean nec orci ultrices, vehicula leo eu, suscipit ex. Maecenas eu feugiat ante. Aliquam ultricies justo non arcu finibus efficitur. Aenean mauris risus, aliquet convallis lacus eu, convallis auctor ligula.</p>
            <h3 id="section6_subsection2">subsection 2</h3>
        <ul><li>
        Sed sit amet dolor condimentum, scelerisque mauris in, dignissim tellus. Duis quis lacus in orci bibendum semper sit amet eu velit. Nunc volutpat in tellus sagittis venenatis. Phasellus sit amet leo ligula. Etiam aliquam felis quis odio rutrum, et hendrerit massa tempor. Pellentesque ut bibendum tellus. Duis facilisis risus vel ipsum vulputate, sed ornare sem varius.</li>

        <li>Quisque vel ipsum lorem. Mauris egestas nibh at viverra suscipit. Aliquam auctor justo et finibus sodales. Aenean tempus mollis tincidunt. Integer porttitor dictum diam quis condimentum. Praesent mattis interdum nisi sit amet faucibus. Aliquam pellentesque porta sapien ullamcorper posuere. Donec scelerisque posuere odio, sed pellentesque sem dignissim nec. Duis consequat pulvinar est vitae maximus. Praesent vulputate orci quis tincidunt tincidunt. Nunc vestibulum ipsum pellentesque maximus auctor. Ut tristique massa arcu, vitae ornare enim ullamcorper vitae.</li>

        <li>Maecenas tincidunt arcu laoreet purus imperdiet ultrices. Cras dapibus libero justo, eu porta nisi tempus ut. Phasellus nec tortor ultrices, euismod velit nec, facilisis tellus. Quisque consequat eros a ullamcorper dignissim. Donec facilisis auctor facilisis. Praesent ultrices orci vel lorem consectetur, non dignissim eros viverra. Morbi ligula velit, placerat a metus at, convallis cursus arcu. Maecenas id euismod ipsum. In id arcu ac justo aliquam porttitor ut quis diam. Fusce pulvinar metus elit, vel rhoncus justo porttitor quis. Nulla mattis rutrum fermentum. Vivamus at facilisis purus, sed tristique ipsum. Praesent luctus dui ut dolor hendrerit, sit amet imperdiet sem facilisis. Aliquam non turpis sem. Proin ac neque in dui consequat dictum.</li>

        <li>Ut consectetur elit vel quam aliquam facilisis. Pellentesque id mauris at metus mattis posuere. Nam mattis erat eu leo pharetra, et egestas mauris commodo. Duis mi mauris, cursus et odio varius, gravida sodales odio. Etiam non elementum nulla. Nulla consequat mi sed lectus egestas, eu luctus diam tempus. Aliquam auctor tellus arcu, vel porttitor orci gravida sit amet. Quisque facilisis volutpat venenatis. Aliquam a turpis a ex venenatis facilisis. Nunc quis ante convallis, posuere nisl ac, fringilla nibh. Donec in libero ut ligula consequat rhoncus id a nisl.</li></ul>
        </div>
        <div class="section">
        <h2 id="homework_section">Homework</h2>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum eget eros nisi. Donec mattis lobortis luctus. Proin porta erat ac ligula dignissim, vehicula congue ex egestas. Vestibulum imperdiet ligula a eros placerat, sed imperdiet odio volutpat. Cras diam lectus, egestas in nulla non, sollicitudin ullamcorper ligula. Proin nec pharetra enim, in euismod justo. Nunc interdum nunc eu pretium consectetur. Nunc sagittis vestibulum ipsum, ut blandit mi euismod sit amet. Sed ultricies justo a mollis vestibulum. Aenean nec orci ultrices, vehicula leo eu, suscipit ex. Maecenas eu feugiat ante. Aliquam ultricies justo non arcu finibus efficitur. Aenean mauris risus, aliquet convallis lacus eu, convallis auctor ligula.</p>
        <ul><li>
        Sed sit amet dolor condimentum, scelerisque mauris in, dignissim tellus. Duis quis lacus in orci bibendum semper sit amet eu velit. Nunc volutpat in tellus sagittis venenatis. Phasellus sit amet leo ligula. Etiam aliquam felis quis odio rutrum, et hendrerit massa tempor. Pellentesque ut bibendum tellus. Duis facilisis risus vel ipsum vulputate, sed ornare sem varius.</li>

        <li>Quisque vel ipsum lorem. Mauris egestas nibh at viverra suscipit. Aliquam auctor justo et finibus sodales. Aenean tempus mollis tincidunt. Integer porttitor dictum diam quis condimentum. Praesent mattis interdum nisi sit amet faucibus. Aliquam pellentesque porta sapien ullamcorper posuere. Donec scelerisque posuere odio, sed pellentesque sem dignissim nec. Duis consequat pulvinar est vitae maximus. Praesent vulputate orci quis tincidunt tincidunt. Nunc vestibulum ipsum pellentesque maximus auctor. Ut tristique massa arcu, vitae ornare enim ullamcorper vitae.</li>

        <li>Maecenas tincidunt arcu laoreet purus imperdiet ultrices. Cras dapibus libero justo, eu porta nisi tempus ut. Phasellus nec tortor ultrices, euismod velit nec, facilisis tellus. Quisque consequat eros a ullamcorper dignissim. Donec facilisis auctor facilisis. Praesent ultrices orci vel lorem consectetur, non dignissim eros viverra. Morbi ligula velit, placerat a metus at, convallis cursus arcu. Maecenas id euismod ipsum. In id arcu ac justo aliquam porttitor ut quis diam. Fusce pulvinar metus elit, vel rhoncus justo porttitor quis. Nulla mattis rutrum fermentum. Vivamus at facilisis purus, sed tristique ipsum. Praesent luctus dui ut dolor hendrerit, sit amet imperdiet sem facilisis. Aliquam non turpis sem. Proin ac neque in dui consequat dictum.</li>

        <li>Ut consectetur elit vel quam aliquam facilisis. Pellentesque id mauris at metus mattis posuere. Nam mattis erat eu leo pharetra, et egestas mauris commodo. Duis mi mauris, cursus et odio varius, gravida sodales odio. Etiam non elementum nulla. Nulla consequat mi sed lectus egestas, eu luctus diam tempus. Aliquam auctor tellus arcu, vel porttitor orci gravida sit amet. Quisque facilisis volutpat venenatis. Aliquam a turpis a ex venenatis facilisis. Nunc quis ante convallis, posuere nisl ac, fringilla nibh. Donec in libero ut ligula consequat rhoncus id a nisl. <a class="section_link" href="#">Download Homework 3</a></li></ul>
        </div>
    </main>
    <?php include("footer.html"); ?>
</body>
