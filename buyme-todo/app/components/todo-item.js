import Component from '@ember/component';

export default Component.extend({
  actions: {
    toggleCheckBox(){
      const store = this.get('store');
      let todo = this.get('todo');

      store.findRecord('todo', todo.id).then(function(todo) {
        console.log(!todo.done);
        todo.set('done', !todo.done);
        todo.save();
      });

    },
    onDelete(){
      const store = this.get('store');
      let todo = this.get('todo');

      store.findRecord('todo', todo.id, { backgroundReload: false }).then(function(todo) {
        todo.destroyRecord();
      });
    },
    onSave(newValue) {
      const store = this.get('store');
      let todo = this.get('todo');

      store.findRecord('todo', todo.id).then(function(todo) {
        todo.set('body', newValue);
        todo.save();
      });
    }
  }
});
