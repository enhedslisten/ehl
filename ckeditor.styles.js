CKEDITOR.addStylesSet( 'drupal',
                      [
  /* Block Styles */
  { 
    name : 'Overskrift',
    element : 'h2'
  },
  { 
    name: 'Underoverskrift', 
    element : 'h3' 
  },
  { 
    name : 'Brødtekst',
    element : 'p' 
  },

  /* Inline Styles */
  { 
    name : 'Rød', 
    element : 'span',
    attributes : {
      'class' : 'color-red' }
  },

  /* Object Styles */
  { 
    name : 'Knap',
    element : 'a',
    attributes : {
      'class' : 'btn' }
  },

  { 
    name : 'Fancy punkter',
    element : 'ul',
    attributes : { 'class' : 'ehl-bullet-red' }
  }
]);