<div class="section">
    <div class="section__main">
        <x-employee-info-component />
    </div>
</div>
<x-manager-characteristic-component :readonly="true" />
<x-feedback-component />
<x-result-last-meeting-component :checkbox="true" :disabled="true" />