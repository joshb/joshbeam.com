module ApplicationHelper
  def pageTitle(title)
    content_for(:title) { title }
  end

  def filePath(filename)
    root_path + 'files/' + filename
  end

  def actionFilePath(filename)
    filePath controller.controller_name + '/' + controller.action_name + '/' + filename
  end
end
