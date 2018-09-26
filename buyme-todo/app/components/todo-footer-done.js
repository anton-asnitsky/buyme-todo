import Component from '@ember/component';
import { computed } from '@ember/object';

export default Component.extend({
  done: computed('todos',function(){
    const todos = this.get('todos');
    return todos.filter((todo) => {
      return todo.done;
    }).length;
  })
});
